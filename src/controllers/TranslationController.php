<?php

class TranslationController {

    public function getLanguage() {
        $language = null;
        if (isset($_COOKIE['lang'])) {
            $language = $_COOKIE['lang'];
        }
        else {
            $language = 'fr';
        }

        return $language;
    }

    public function getLocale() {
        return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],3, 5);
    }

    public function getTranslations($lang) {
        $translationsFile = file_get_contents(ROOT.BASE_URL.'translations/'.$lang.'.json');
        return json_decode($translationsFile, true);
    }

}