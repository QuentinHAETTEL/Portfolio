<?php

include('../../config.php');
require_once '../controllers/CookieController.php';
$cookieController = new CookieController();
$cookie = new Cookie();

/* Get preference cookie */
if (isset($_GET['method']) && $_GET['method'] == 'getCookiesPreference') {
    if (isset($_COOKIE['cookies-preferences'])) {
        $preference = $_COOKIE['cookies-preferences'];
    }
    else {
        $preference = null;
    }

    print(json_encode($preference));
}


/* Create preference cookie */
if (isset($_GET['method']) && $_GET['method'] == 'setCookiesPreference' && isset($_GET['preference'])) {

    if ($_GET['preference'] == 0) {
        /* Remove existing cookies if user decline cookies */
        foreach ($_COOKIE as $cookieName => $cookieValue) {
            $cookie->setName($cookieName);
            $cookie->setValue(null);
            $cookie->setTime(time()-3600);
            $cookieController->createCookie($cookie);
        }
    }

    $cookie->setName('cookies-preferences');
    $cookie->setValue($_GET['preference']);
    $cookie->setTime(time()+(3600*24*30));
    $cookieController->createCookie($cookie);

    print(json_encode(true));
}


/* Get color cookie */
if (isset($_GET['method']) && $_GET['method'] == 'getColorCookie') {
    if (isset($_COOKIE['style'])) {
        $style = $_COOKIE['style'];
    }
    else {
        $style = 'lightgreen';
    }

    print(json_encode($style));
}


/* Create color cookie */
if (isset($_GET['method']) && $_GET['method'] == 'setColorCookie' && isset($_GET['color'])) {
    $cookie->setName('style');
    $cookie->setValue($_GET['color']);
    $cookie->setTime(time()+(3600*12));
    $cookieController->createCookie($cookie);

    print(json_encode(true));
}
