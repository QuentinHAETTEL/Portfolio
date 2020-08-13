<?php

class Mail {
    private $recipient;
    private $subject;
    private $message;
    private $from;
    private $replyTo;
    private $xMailer;


    public function __construct()
    {
        $this->setRecipient('quentin.haettel@gmail.com');
    }

    public function getRecipient() {
        return $this->recipient;
    }

    public function setRecipient($recipient) {
        if (isset($recipient) && !empty($recipient)) {
            $this->recipient = $recipient;
        }
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        if (isset($subject) && !empty($subject)) {
            $this->subject = $subject;
        }
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        if (isset($message) && !empty($message)) {
            $this->message = $message;
        }
    }

    public function getFrom() {
        return $this->from;
    }

    public function setFrom($from) {
        if (isset($from) && !empty($from)) {
            $this->from = $from;
        }
    }

    public function getReplyTo() {
        return $this->replyTo;
    }

    public function setReplyTo($replyTo) {
        if (isset($replyTo) && !empty($replyTo)) {
            $this->replyTo = $replyTo;
        }
    }

    public function getXMailer() {
        return $this->xMailer;
    }

    public function setXMailer($xMailer) {
        if (isset($xMailer) && !empty($xMailer)) {
            $this->xMailer = $xMailer;
        }
    }
}