<?php

class ErrorHttp {
    private $error;

    public function __construct()
    {
        $this->error = [
            '400' => 'Une erreur est survenue, veuillez recommencer plus tard ou contacter l\'administrateur du site.',
            '401' => 'Une authentification est nécessaire pour accéder à la page demandée.',
            '403' => 'Les droits d\'accès ne permettent pas d\'accéder à la page demandée.',
            '404' => 'La page demandée n\'existe pas.',
            '500' => 'Une erreur est survenue, veuillez recommencer plus tard ou contacter l\'administrateur du site.',
            '502' => 'Une erreur est survenue, veuillez recommencer plus tard ou contacter l\'administrateur du site.',
            '503' => 'Le site est temporairement indisponible ou en maintenance, veuillez recommencer plus tard ou contacter l\'administrateur du site.',
            '504' => 'Le temps d\'attente pour le chargement de la page demandée est trop long, veuillez recommencer plus tard ou contacter l\'administrateur du site.'
        ];
    }

    public function getErrorHttp() {
        return $this->error;
    }
}