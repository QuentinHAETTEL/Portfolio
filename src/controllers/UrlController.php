<?php

require_once ROOT.BASE_URL.'src/entities/Url.php';

class UrlController {

    public function getProtocol() {
        $protocol = null;
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = 'https';
        }
        else {
            $protocol = 'http';
        }
        return $protocol;
    }

    public function getUrl() {
        return $this->getProtocol() . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    public function getRootUrl() {
        return $this->getProtocol() . '://' . $_SERVER['HTTP_HOST'];
    }

    public function getIndexedPages() {
        $url = new Url();
        return $url->getIndexedPages();
    }

}