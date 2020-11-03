<!DOCTYPE html>
<html lang="fr">

<?php
include('config.php');
// Get the URL of the current page : testing the protocol and get the URL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
}
else {
    $protocol = 'http';
}
$globalUrl = $protocol . '://' . $_SERVER['HTTP_HOST'];
$url = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$page = 'presentation';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Développement web full-stack Strasbourg - Présentation</title>
    <meta name="description" content="Développeur web full-stack à Strasbourg (Bas-Rhin). Création ou refonte de sites web, intégration front-end et développement back-end.">
    <link rel="canonical" href="<?php echo $url ?>" />

    <link rel="shortcut icon" type="image/svg+xml" href="assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" sizes="16x16" href="assets/images/favicon/favicon-16.ico" />
    <link rel="shortcut icon" sizes="32x32" href="assets/images/favicon/favicon-32.ico" />
    <link rel="shortcut icon" sizes="32x32" href="assets/images/favicon/favicon-32.png" />
    <link rel="shortcut icon" sizes="128x128" href="assets/images/favicon/favicon-128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/touch-icon-152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/favicon/touch-icon-167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/touch-icon-180.png" />

    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="assets/images/favicon/tile-image.png">
    <meta name="application-name" content="Quentin HAETTEL">
    <meta name="apple-mobile-web-app-title" content="Quentin HAETTEL">
    <meta name="author" content="Quentin HAETTEL">
    <meta name="copyright" content="Quentin HAETTEL - 2020">

    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Développement web full-stack Strasbourg - Présentation" />
    <meta property="og:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="<?php echo $globalUrl ?>" />
    <meta property="og:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="og:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:height" content="310" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Développement web full-stack Strasbourg - Présentation" />
    <meta property="twitter:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="twitter:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="twitter:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/styles/main.css" />
    <script src="<?php echo BASE_URL; ?>public/scripts/main.js"></script>

    <?php
    include('pages/components/google_analytics.php');
    ?>
</head>

<body>
    <?php
        include('pages/components/header.php');
    ?>

    <main>
        <?php
        include('pages/components/settings_tabs.php');
        ?>

        <section class="banner">
            <div class="banner__content">
                <p class="banner__title">Quentin HAETTEL</p>
                <span class="separator">&nbsp;</span>
                <h1 class="banner__text">Développeur web<br />full-stack</h1>
            </div>
        </section>

        <section id="presentation" class="presentation">
            <h2 class="h1">Présentation</h2>
            <div class="box">
                <div class="box__wrapper box__wrapper--between">
                    <p class="box__text box__text--small">Bonjour, je m'appelle Quentin HAETTEL, je suis <strong class="normal-text">développeur web full-stack à Strasbourg</strong> et dans sa région</p>
                    <picture class="box__image">
                        <source srcset="assets/images/photo_presentation.webp" type="image/webp">
                        <img src="assets/images/photo_presentation.jpg" alt="Photo Quentin HAETTEL - Développeur web full-stack">
                    </picture>
                    <p class="box__text box__text--small">Je suis actuellement apprenti en Licence Professionnelle DWEB à l'IUT de Haguenau</p>
                </div>
            </div>
        </section>

        <?php
        include('pages/components/cookies_banner.php');
        ?>
    </main>

    <?php
    include('pages/components/footer.php');
    ?>
</body>
</html>