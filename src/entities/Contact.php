<?php

class Contact {
    private $firstname;
    private $lastname;
    private $email;
    private $object;
    private $message;
    private $date;


    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        if (isset($firstname) && !empty($firstname)) {
            $this->firstname = htmlspecialchars($firstname);
        }
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        if (isset($lastname) && !empty($lastname)) {
            $this->lastname = htmlspecialchars($lastname);
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (isset($email) && !empty($email)) {
            $this->email = htmlspecialchars($email);
        }
    }

    public function getObject() {
        return $this->object;
    }

    public function setObject($object) {
        if (isset($object) && !empty($object)) {
            $this->object = htmlspecialchars($object);
        }
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        if (isset($message) && !empty($message)) {
            $this->message = htmlspecialchars($message);
        }
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}