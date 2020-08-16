<!DOCTYPE html>
<html lang="fr">

<?php
include('../config.php');
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

        <section class="contact">
            <h1 class="title">Contact</h1>
            <div class="box">
                <div class="contact__box">
                    <form id="contact-form" method="POST" action="#">
                        <div class="contact__field" data-input-container>
                            <label class="contact__field--label" for="contact--firstname">Prénom :</label>
                            <input id="contact--firstname" class="contact__field--input" type="text" name="firstname" placeholder="Prénom" required="required" data-placeholder="Prénom" />
                        </div>
                        <div class="contact__field" data-input-container>
                            <label class="contact__field--label" for="contact--lastname">Nom :</label>
                            <input id="contact--lastname" class="contact__field--input" type="text" name="lastname" placeholder="Nom" required="required" data-placeholder="Nom" />
                        </div>
                        <div class="contact__field" data-input-container>
                            <label class="contact__field--label" for="contact--email">Adresse mail :</label>
                            <input id="contact--email" class="contact__field--input" type="email" name="email" placeholder="Adresse mail" required="required" data-placeholder="Adresse mail" />
                        </div>
                        <div class="contact__field" data-input-container>
                            <label class="contact__field--label" for="contact--object">Objet :</label>
                            <input id="contact--object" class="contact__field--input" type="text" name="object" placeholder="Objet" required="required" data-placeholder="Objet" />
                        </div>
                        <div class="contact__field" data-input-container>
                            <label class="contact__field--label" for="contact--message">Message :</label>
                            <textarea id="contact--message" class="contact__field--textarea" name="message" placeholder="Message" required="required" data-placeholder="Message"></textarea>
                        </div>

                        <div class="contact__checkbox">
                            <input id="contact--rgpd" type="checkbox" name="rgpd" required="required" />
                            <label class="contact__checkbox--label" for="contact--rgpd">J'accepte que mes données personnelles soient recueillies pour être recontacté. Vous pouvez exercer votre droit d'accès aux données en contactant : <a href="mailto:quentin.haettel@gmail.com" target="_blank">quentin.haettel[at]gmail.com</a>.</label>
                        </div>

                        <button class="label contact__submit" type="submit">Envoyer</button>
                    </form>

                    <div class="contact__infos">
                        <div class="contact__logos">
                            <a class="contact__logos--item" href="https://www.linkedin.com/in/quentin-haettel/" target="_blank">
<!--                                <img src="--><?php //echo BASE_URL ?><!--assets/images/icons/linkedin.svg" alt="Logo LinkedIn" />-->
                                <?php include('../assets/images/icons/linkedin.html'); ?>
                            </a>
                            <a class="contact__logos--item" href="https://www.facebook.com/quentin.haettel" target="_blank">
                                <?php include('../assets/images/icons/facebook.html'); ?>
                            </a>
                            <a class="contact__logos--item" href="https://github.com/QuentinHAETTEL/" target="_blank">
                                <?php include('../assets/images/icons/github.html'); ?>
                            </a>
                        </div>
                        <a href="<?php echo BASE_URL; ?>data/CV.pdf" class="label contact__action" download="CV_HAETTEL-Quentin.pdf" target="_blank">
                            <img src="<?php echo BASE_URL ?>assets/images/icons/download.svg" alt="Icône télécharger" />
                            Télécharger mon CV
                        </a>
                        <div class="contact__text">
                            <a class="contact__text--item" href="mailto:quentin.haettel@gmail.com" target="_blank">quentin.haettel [at] gmail.com</a>
                            <a class="contact__text--item" href="tel:0388913543" target="_blank">+33 (0)6 78 61 47 18</a>
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