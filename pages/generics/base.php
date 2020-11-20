<?php
require_once ROOT.BASE_URL.'src/controllers/UrlController.php';
require_once ROOT.BASE_URL.'src/controllers/TranslationController.php';

$urls = new UrlController();
$translations = new TranslationController();
$lang = $translations->getLanguage();
$translation = $translations->getTranslations($lang);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $translation['meta']['title'].' - ',(isset($_GET['error']) ? $translation['generals']['error'] : $translation["$page"]['title']); ?></title>
    <meta name="description" content="<?php echo $translation['meta']['description']; ?>">
    <link rel="canonical" href="<?php echo $urls->getUrl(); ?>" />
    <?php
    if (!in_array($page, $urls->getIndexedPages())) {
        echo '<meta name="robots" content="noindex">';
    }
    ?>

    <link rel="shortcut icon" type="image/svg+xml" href="assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" sizes="16x16" href="assets/images/favicon/favicon-16.ico" />
    <link rel="shortcut icon" sizes="32x32" href="assets/images/favicon/favicon-32.ico" />
    <link rel="shortcut icon" sizes="32x32" href="assets/images/favicon/favicon-32.png" />
    <link rel="shortcut icon" sizes="128x128" href="assets/images/favicon/favicon-128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/touch-icon-152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/favicon/touch-icon-167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/touch-icon-180.png" />

    <?php
    if (!in_array($page, $urls->getIndexedPages())) {
        echo '<meta name="msapplication-TileColor" content="#FFFFFF">';
        echo '<meta name="msapplication-TileImage" content="assets/images/favicon/tile-image.png">';
        echo '<meta name="application-name" content="'.$translation['presentation']['name'].'">';
        echo '<meta name="apple-mobile-web-app-title" content="'.$translation['presentation']['name'].'">';
    }
    ?>
    <meta name="author" content="<?php echo $translation['presentation']['name']; ?>">
    <meta name="copyright" content="<?php echo $translation['presentation']['name'].' - '.date('Y'); ?>">

    <?php
    if (!in_array($page, $urls->getIndexedPages())) {
        include(ROOT.BASE_URL.'pages/generics/seo.php');
    }
    ?>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/styles/main.css" />
    <script src="<?php echo BASE_URL; ?>public/scripts/main.js"></script>

    <?php
    include(ROOT.BASE_URL.'pages/components/google_analytics.php');
    ?>
</head>