<?php

class Url {
    private $indexedPages;

    public function __construct()
    {
        $this->setIndexedPages(['presentation', 'experiences', 'skills', 'projects', 'contact']);
    }

    public function getIndexedPages() {
        return $this->indexedPages;
    }

    public function setIndexedPages($indexedPages) {
        if (isset($indexedPages) && !empty($indexedPages)) {
            $this->indexedPages = $indexedPages;
        }
    }
}