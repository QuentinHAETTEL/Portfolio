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
    <title>Développement web full-stack Strasbourg - Mentions légales</title>
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

        <section>
            <h1><?php echo $translation['legal']['title']; ?></h1>
            <div class="box">
                <div class="box__wrapper box__wrapper--columns">
                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partOne']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partOne']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textTwo']; ?> </p>
                    <p><?php echo $translation['legal']['partOne']['textThree'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textFour']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partTwo']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partTwo']['text']; ?> : <a class="box__link" href="mailto:<?php echo $translation['generals']['contact']['mailTo']; ?>"><?php echo $translation['generals']['contact']['mail']; ?></a>.</p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partThree']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partThree']['text']; ?></p>
                    <div class="flex flex-column">
                        <span><?php echo $translation['legal']['host']['name']; ?></span>
                        <span><?php echo $translation['legal']['host']['address']; ?></span>
                        <span><?php echo $translation['legal']['host']['city']; ?></span>
                        <a class="box__link" href="tel:<?php echo $translation['legal']['host']['phoneTo']; ?>"><?php echo $translation['legal']['host']['phone']; ?></a>
                        <a class="box__link" href="mailto:<?php echo $translation['legal']['host']['mailTo']; ?>"><?php echo $translation['legal']['host']['mail']; ?></a>
                    </div>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partFour']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partOne']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textTwo']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partFive']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partFive']['text']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partSix']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partSix']['text']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partSeven']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partSeven']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partSeven']['textTwo']; ?></p>
                    <p><?php echo $translation['legal']['partSeven']['textThree']; ?></p>
                    <p><?php echo $translation['legal']['partSeven']['textFour']; ?></p>
                    <p>
                        <button id="cookies-accept" class="button"><?php echo $translation['cookies']['enable']; ?></button>
                        <button id="cookies-decline" class="button"><?php echo $translation['cookies']['disable']; ?></button>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>