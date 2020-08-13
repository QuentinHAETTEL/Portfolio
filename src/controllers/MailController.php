<?php

require_once '../entities/Mail.php';

class MailController {

    public function sendMail($mail) {
        $headers = [
            'From' => $mail->getFrom(),
            'Reply-To' => $mail->getReplyTo(),
            'X-Mailer' => $mail->getXMailer()
        ];

        mail($mail->getRecipient(), $mail->getSubject(), $mail->getMessage(), $headers);
    }

}