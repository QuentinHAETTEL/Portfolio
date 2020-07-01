<?php

require_once '../controllers/ContactController.php';

if (isset($_POST)) {
    $contactController = new ContactController();

    print(json_encode($contactController->saveContact($_POST)));
}
