<?php

class Cookie {
    private $name;
    private $value;
    private $time;
    private $path;
    private $domain;
    private $secure;
    private $httponly;
    private $samesite;


    public function __construct()
    {
        $this->value = null;
        $this->time = time()+(3600*24*30);
        $this->path = '/';
        $this->domain = $_SERVER['HTTP_HOST'];
        $this->secure = true;
        $this->httponly = true;
        $this->samesite = 'Strict';
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (isset($name) && !empty($name)) {
            $this->name = $name;
        }
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        if (isset($value)) {
            $this->value = $value;
        }
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        if (isset($time) && !empty($time)) {
            $this->time = $time;
        }
    }

    public function getPath() {
        return $this->path;
    }

    public function getDomain() {
        return $this->domain;
    }

    public function getSecure() {
        return $this->secure;
    }

    public function getHttponly() {
        return $this->httponly;
    }

    public function getSamesite() {
        return $this->samesite;
    }

}