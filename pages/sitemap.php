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

$page = '';
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
    <section class="legals">
        <h1 class="title">Plan du site</h1>
        <div class="box">
            <div class="legals__box">
                <ul class="legals__box--list">
                    <li><a href="<?php echo BASE_URL; ?>">Présentation</a></li>
                    <li><a href="<?php echo BASE_URL; ?>experiences">Expériences</a></li>
                    <li><a href="<?php echo BASE_URL; ?>competences">Compétences</a></li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>projets">Projets</a>
                        <ul>
                            <li><a href="https://projets.quentin-haettel.fr/start-from-scratch/">Start from Scratch</a></li>
                            <li><a href="https://projets.quentin-haettel.fr/admin-panel/public">Admin panel</a></li>
                            <li><a href="https://projets.quentin-haettel.fr/snake">Snake</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                    <li><a href="<?php echo BASE_URL; ?>mentions-legales">Mentions légales</a></li>
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