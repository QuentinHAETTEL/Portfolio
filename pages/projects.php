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
            <h1>Projets</h1>
            <div class="card__wrapper">
                <div class="card" data-card>
                    <picture class="card__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_start-from-scratch.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_start-from-scratch.jpg" alt="Développement web - Start from Scratch">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title">Start from Scratch</h3>
                        <span class="separator"></span>
                        <p class="card__category">Développement full-stack</p>

                        <div class="card__details">
                            <p class="card__text">Éditeur de composants HTML accessibles</p>
                            <div>
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>PHP</span>
                                <span class="separator--vertical"></span>
                                <span>SQL</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/start-from-scratch" target="_blank">Voir le projet</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-card>
                    <picture class="project__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_admin-panel.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_admin-panel.jpg" alt="Développement web - Admin panel">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title">Admin panel</h3>
                        <span class="separator"></span>
                        <p class="card__category">Développement front-end</p>

                        <div class="card__details">
                            <p class="card__text">Intégration d'un panel administrateur statique</p>
                            <div>
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>CSS</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/admin-panel/public" target="_blank">Voir le projet</a>
                        </div>
                    </div>
                </div>

                <div class="card" data-card>
                    <picture class="project__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_snake.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_snake.jpg" alt="Développement web - Snake">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title">Jeu Snake</h3>
                        <span class="separator"></span>
                        <p class="card__category">Développement front-end</p>

                        <div class="card__details">
                            <p class="card__text">Célèbre jeu Snake avec modes de difficulté</p>
                            <div>
                                <span>HTML</span>
                                <span class="separator--vertical"></span>
                                <span>CSS</span>
                                <span class="separator--vertical"></span>
                                <span>JavaScript</span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/snake" target="_blank">Voir le projet</a>
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