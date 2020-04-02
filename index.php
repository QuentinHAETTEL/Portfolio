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

    <link rel="stylesheet" href="public/styles/main.css" />
    <script src="public/scripts/main.js"></script>
</head>

<body>
    <?php
        include('pages/components/header.php');
    ?>

    <main>
        <section class="banner">
            <div class="banner__content">
                <div class="banner__title">
                    <p class="banner__title--name">Quentin HAETTEL</p>
                    <span class="separator">&nbsp;</span>
                    <h1 class="banner__title--job">Développeur web<br />full-stack</h1>
                </div>
            </div>
        </section>
    </main>
</body>
</html>