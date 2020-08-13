<?php

require_once '../../config.php';
require_once '../entities/Contact.php';
require_once '../entities/Mail.php';
require_once '../controllers/MailController.php';

class ContactController {

    private static $db;

    public function __construct()
    {
        self::$db = connectDB();
    }

    public function saveContact() {
        $contact = new Contact();
        $contact->setFirstname($_POST['firstname']);
        $contact->setLastname($_POST['lastname']);
        $contact->setEmail($_POST['email']);
        $contact->setObject($_POST['object']);
        $contact->setMessage($_POST['message']);
        $contact->setDate(date('Y-m-d G:i'));

        $insert = self::$db->exec('INSERT INTO contact (firstname, lastname, email, object, message, date) VALUES ("'.$contact->getFirstname().'", "'.$contact->getLastname().'", "'.$contact->getEmail().'", "'.$contact->getObject().'", "'.$contact->getMessage().'", "'.$contact->getDate().'");');
        $this->sendContact($contact);
        if ($insert == 1) {
            return true;
        }
    }

    public function sendContact($contact) {
        $mail = new Mail();
        $mailController = new MailController();
        $mail->setSubject('[PORTFOLIO] - ' . $contact->getObject());
        $mail->setMessage($contact->getMessage());
        $mail->setFrom($contact->getEmail());
        $mail->setReplyTo($contact->getEmail());
        $mail->setXMailer('PHP/'.phpversion());

        $mailController->sendMail($mail);
    }

}