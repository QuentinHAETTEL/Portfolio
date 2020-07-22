<?php

require_once '../entities/Cookie.php';

class CookieController {

    public function createCookie($cookie) {
        setcookie($cookie->getName(), $cookie->getValue(), $cookie->getTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->getSecure(), $cookie->getHttponly());
    }

}