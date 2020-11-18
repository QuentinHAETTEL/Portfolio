<!DOCTYPE html>
<html lang="fr">

<?php
include('../config.php');
require_once '../src/controllers/TranslationController.php';
// Get the URL of the current page : testing the protocol and get the URL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
}
else {
    $protocol = 'http';
}
$globalUrl = $protocol . '://' . $_SERVER['HTTP_HOST'];
$url = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$page = '';
$translations = new TranslationController();
$lang = $translations->getLanguage();
$translation = $translations->getTranslations($lang);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>Développement web full-stack Strasbourg - Plan du site</title>
    <link rel="canonical" href="<?php echo $url ?>" />

    <link rel="shortcut icon" type="image/svg+xml" href="../assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" sizes="16x16" href="../assets/images/favicon/favicon-16.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.png" />
    <link rel="shortcut icon" sizes="128x128" href="../assets/images/favicon/favicon-128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/touch-icon-152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/favicon/touch-icon-167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/touch-icon-180.png" />

    <meta name="author" content="Quentin HAETTEL">
    <meta name="copyright" content="Quentin HAETTEL - 2020">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/styles/main.css" />
    <script src="<?php echo BASE_URL; ?>public/scripts/main.js"></script>

    <?php
    include('components/google_analytics.php');
    ?>
</head>

<body>
<?php
include('components/header.php');
?>

<main>
    <?php
    include('components/settings_tabs.php');
    ?>

    <section class="legals">
        <h1><?php echo $translation['sitemap']['title']; ?></h1>
        <div class="box">
            <div class="box__wrapper box__wrapper--columns">
                <ul class="list">
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>"><?php echo $translation['presentation']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>experiences"><?php echo $translation['experiences']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>competences"><?php echo $translation['skills']['title']; ?></a></li>
                    <li class="list__item">
                        <a href="<?php echo BASE_URL; ?>projets"><?php echo $translation['projects']['title']; ?></a>
                        <ul>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/start-from-scratch/"><?php echo $translation['projects']['projectOne']['name']; ?></a></li>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/admin-panel/public"><?php echo $translation['projects']['projectTwo']['name']; ?></a></li>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/snake"><?php echo $translation['projects']['projectThree']['name']; ?></a></li>
                        </ul>
                    </li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>contact"><?php echo $translation['contact']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>mentions-legales"><?php echo $translation['legal']['title']; ?></a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
include('components/footer.php');
?>
</body>
</html>