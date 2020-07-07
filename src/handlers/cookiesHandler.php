<?php

include('../../config.php');

if (isset($_GET['method']) && $_GET['method'] == 'getCookiesPreferences') {
    if (isset($_COOKIE['cookies-preferences']) && $_COOKIE['cookies-preferences'] == 0) {
        $preference = 0;
        foreach ($_COOKIE as $cookie => $value) {
            if ($cookie !== 'cookies-preferences') {
                setcookie($cookie, null, time()-3600, '/');
            }
        }
    }
    else if (isset($_COOKIE['cookies-preferences']) && $_COOKIE['cookies-preferences'] == 1) {
        $preference = 1;
    }
    else {
        $preference = null;
    }

    print(json_encode($preference));
}

if (isset($_GET['preference'])) {
    /* Remove existing cookies if user decline cookies */
    if ($_GET['preference'] == 0) {
        foreach ($_COOKIE as $cookie => $value) {
            setcookie($cookie, null, time()-3600, '/');
        }
    }

    setcookie('cookies-preferences', $_GET['preference'], time()+(3600*24*30), '/');

    print(json_encode(true));
}
