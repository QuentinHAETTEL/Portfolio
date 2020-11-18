<?php

class ErrorHttpController {

    public function getErrorDescription($code) {
        $translations = new TranslationController();
        $lang = $translations->getLanguage();
        $translation = $translations->getTranslations($lang);

        return $translation['error'][$code];
    }

}