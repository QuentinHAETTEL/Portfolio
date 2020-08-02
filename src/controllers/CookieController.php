<?php

require_once '../entities/Cookie.php';

class CookieController {

    public function createCookie($cookie) {

        if (PHP_VERSION_ID > 70400) {
            setcookie($cookie->getName(), $cookie->getValue(), [
                'expires' => $cookie->getTime(),
                'path' => $cookie->getPath(),
                'domain' => $cookie->getDomain(),
                'samesite' => $cookie->getSamesite(),
                'secure' => $cookie->getSecure(),
                'httponly' => $cookie->getHttponly()
            ]);
        }
        else {
            setcookie($cookie->getName(), $cookie->getValue(), $cookie->getTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->getSecure(), $cookie->getHttponly());
        }
    }

}