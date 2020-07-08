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

$page = 'projects';

var_dump(ROOT . '/projects/start-from-scratch');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Développement web full-stack Strasbourg - Projets</title>
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
    <meta property="og:title" content="Développement web full-stack Strasbourg - Projets" />
    <meta property="og:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="<?php echo $globalUrl ?>" />
    <meta property="og:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="og:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:height" content="310" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Développement web full-stack Strasbourg - Projets" />
    <meta property="twitter:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="twitter:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="twitter:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/styles/main.css" />
    <script src="<?php echo BASE_URL; ?>/public/scripts/main.js"></script>

    <?php
    include('components/google_analytics.php');
    ?>
</head>

<body>
    <?php
    include('components/header.php');
    ?>

    <main>
        <section class="projects">
            <h1 class="title">Projets</h1>
            <div class="card__container">
                <div class="card project" data-card>
                    <img class="project__image" src="<?php echo BASE_URL; ?>assets/images/project_start-from-scratch.jpg" alt="Développement web - Start from Scratch" />
                    <div class="project__details" data-card-details>
                        <h3 class="project__details--title">Start from Scratch</h3>
                        <span class="separator"></span>
                        <p class="project__details--type">Développement full-stack</p>

                        <div class="project__caracteristics">
                            <p class="project__caracteristics--description">Éditeur de composants HTML accessibles</p>
                            <div class="project__caracteristics--languages">
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>PHP</span>
                                <span class="separator--vertical"></span>
                                <span>SQL</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="label project__caracteristics--action" href="<?php echo $globalUrl; ?>/projects/start-from-scratch">Voir le projet</a>
                        </div>
                    </div>
                </div>

                <div class="card project" data-card>
                    <img class="project__image" src="<?php echo BASE_URL; ?>assets/images/project_admin-panel.jpg" alt="Développeent web - Admin panel" />
                    <div class="project__details" data-card-details>
                        <h3 class="project__details--title">Admin panel</h3>
                        <span class="separator"></span>
                        <p class="project__details--type">Développement front-end</p>

                        <div class="project__caracteristics">
                            <p class="project__caracteristics--description">Intégration d'un panel administrateur statique</p>
                            <div class="project__caracteristics--languages">
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>CSS</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="label project__caracteristics--action" href="<?php echo $globalUrl; ?>/projects/admin-panel">Voir le projet</a>
                        </div>
                    </div>
                </div>

                <div class="card project" data-card>
                    <img class="project__image" src="<?php echo BASE_URL; ?>assets/images/project_snake.jpg" alt="Développement web - Snake" />
                    <div class="project__details" data-card-details>
                        <h3 class="project__details--title">Jeu Snake</h3>
                        <span class="separator"></span>
                        <p class="project__details--type">Développement front-end</p>

                        <div class="project__caracteristics">
                            <p class="project__caracteristics--description">Célèbre jeu Snake avec modes de difficulté</p>
                            <div class="project__caracteristics--languages">
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>CSS</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="label project__caracteristics--action" href="<?php echo $globalUrl; ?>/projects/snake">Voir le projet</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>