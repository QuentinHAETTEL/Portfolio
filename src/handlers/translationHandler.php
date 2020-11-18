<?php

include('../../config.php');
require_once '../controllers/TranslationController.php';
require_once '../controllers/CookieController.php';


if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    $translations = new TranslationController();
    $cookieController = new CookieController();
    $cookie = new Cookie();

    $cookie->setName('lang');
    $cookie->setValue($_GET['lang']);
    $cookie->setTime(time()+(3600*24));
    $cookieController->createCookie($cookie);

    print(json_encode($translations->getLanguage()));
}