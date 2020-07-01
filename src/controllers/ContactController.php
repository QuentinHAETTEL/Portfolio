<?php

require_once '../../config.php';
require_once '../entities/Contact.php';

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
        $contact->setDate(date('Y-m-d'));

        $insert = self::$db->exec('INSERT INTO contact (firstname, lastname, email, object, message, date) VALUES ("'.$contact->getFirstname().'", "'.$contact->getLastname().'", "'.$contact->getEmail().'", "'.$contact->getObject().'", "'.$contact->getMessage().'", "'.$contact->getDate().'");');
        if ($insert == 1) {
            return true;
        }
    }

}