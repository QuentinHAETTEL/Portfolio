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

$page = 'contact';
$translations = new TranslationController();
$lang = $translations->getLanguage();
$translation = $translations->getTranslations($lang);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Développement web full-stack Strasbourg - Contact</title>
    <meta name="description" content="Développeur web full-stack à Strasbourg (Bas-Rhin). Création ou refonte de sites web, intégration front-end et développement back-end.">
    <link rel="canonical" href="<?php echo $url ?>" />

    <link rel="shortcut icon" type="image/svg+xml" href="../assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" sizes="16x16" href="../assets/images/favicon/favicon-16.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.png" />
    <link rel="shortcut icon" sizes="128x128" href="../assets/images/favicon/favicon-128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/touch-icon-152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/favicon/touch-icon-167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/touch-icon-180.png" />

    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/tile-image.png">
    <meta name="application-name" content="Quentin HAETTEL">
    <meta name="apple-mobile-web-app-title" content="Quentin HAETTEL">
    <meta name="author" content="Quentin HAETTEL">
    <meta name="copyright" content="Quentin HAETTEL - 2020">

    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Développement web full-stack Strasbourg - Contact" />
    <meta property="og:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="<?php echo $globalUrl ?>" />
    <meta property="og:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="og:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:height" content="310" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Développement web full-stack Strasbourg - Contact" />
    <meta property="twitter:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="twitter:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="twitter:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />

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
            <h1><?php echo $translation['contact']['title']; ?></h1>
            <div class="box contact">
                <div class="box__wrapper box__wrapper--middle">
                    <form id="contact-form" class="form" method="POST" action="#">
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--firstname"><?php echo $translation['contact']['firstname']; ?> :</label>
                            <input id="contact--firstname" class="form__field" type="text" name="firstname" placeholder="<?php echo $translation['contact']['firstname']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['firstname']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--lastname"><?php echo $translation['contact']['lastname']; ?> :</label>
                            <input id="contact--lastname" class="form__field" type="text" name="lastname" placeholder="<?php echo $translation['contact']['lastname']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['lastname']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--email"><?php echo $translation['contact']['email']; ?> :</label>
                            <input id="contact--email" class="form__field" type="email" name="email" placeholder="<?php echo $translation['contact']['email']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['email']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--object"><?php echo $translation['contact']['subject']; ?> :</label>
                            <input id="contact--object" class="form__field" type="text" name="object" placeholder="<?php echo $translation['contact']['subject']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['subject']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--message"><?php echo $translation['contact']['message']; ?> :</label>
                            <textarea id="contact--message" class="form__field form__field--textarea" name="message" placeholder="<?php echo $translation['contact']['message']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['message']; ?>"></textarea>
                        </div>

                        <div class="form__checkbox-wrapper">
                            <input id="contact--rgpd" type="checkbox" name="rgpd" required="required" />
                            <label class="form__label-checkbox" for="contact--rgpd"><?php echo $translation['contact']['rgpd']; ?> : <a href="mailto:<?php echo $translation['generals']['contact']['mailTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['mail'] ?></a>.</label>
                        </div>

                        <button class="button button--center" type="submit"><?php echo $translation['generals']['send']; ?></button>
                    </form>

                    <div class="contact__infos">
                        <div class="social-icons">
                            <a class="social-icons__item" href="https://www.linkedin.com/in/quentin-haettel/" target="_blank">
                                <?php include('../assets/images/icons/linkedin.html'); ?>
                            </a>
                            <a class="social-icons__item" href="https://www.facebook.com/quentin.haettel" target="_blank">
                                <?php include('../assets/images/icons/facebook.html'); ?>
                            </a>
                            <a class="social-icons__item" href="https://github.com/QuentinHAETTEL/" target="_blank">
                                <?php include('../assets/images/icons/github.html'); ?>
                            </a>
                        </div>
                        <a href="<?php echo BASE_URL; ?>data/CV.pdf" class="button" download="CV-HAETTEL_Quentin.pdf" target="_blank">
                            <img class="button__icon" src="<?php echo BASE_URL ?>assets/images/icons/download.svg" alt="<?php echo $translation['contact']['downloadIcon']; ?>" />
                            <?php echo $translation['contact']['downloadCV']; ?>
                        </a>
                        <div class="box__text">
                            <a class="box__text--link" href="mailto:<?php echo $translation['generals']['contact']['mailTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['mail'] ?></a>
                            <a class="box__text--link" href="tel:<?php echo $translation['generals']['contact']['phoneTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['phone'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include('components/popup.php');
        ?>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>