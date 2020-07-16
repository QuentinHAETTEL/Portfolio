<?php

require_once '../src/entities/ErrorHttp.php';

class ErrorHttpController {

    public function getErrorDescription($code) {
        $error = new ErrorHttp();

        return $error->getErrorHttp()[$code];
    }

}