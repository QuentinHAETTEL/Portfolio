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

$page = 'experiences';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Développement web full-stack Strasbourg - Expériences</title>
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
    <meta property="og:title" content="Développement web full-stack Strasbourg - Expériences" />
    <meta property="og:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="<?php echo $globalUrl ?>" />
    <meta property="og:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="og:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:height" content="310" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Développement web full-stack Strasbourg - Expériences" />
    <meta property="twitter:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="twitter:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="twitter:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />

    <link rel="stylesheet" href="../public/styles/main.css" />
    <script src="../public/scripts/main.js"></script>
</head>

<body>
    <?php
    include('components/header.php');
    ?>

    <main>
        <section class="experiences">
            <h1 class="title">Expériences</h1>
            <div class="box">
                <div class="experiences__box">
                    <div>
                        <h2 class="experiences__box--title">LP MI-DWEB</h2>
                        <p class="experiences__box--date">2019 - 2020</p>
                        <span class="separator">&nbsp;</span>
                        <p class="experiences__box--description">Parcours en développement web front-end et back-end, compétences avancées en UI/UX design, CMS Prestashop et Drupal</p>
                    </div>
                    <div>
                        <div class="experience">
                            <div class="experience__date">
                                <div class="experience__date--before"></div>
                                <div class="experience__date--item">2020</div>
                                <div class="experience__date--after"></div>
                            </div>
                            <div class="embed-box">
                                <h3 class="experience__title">Alternance - Développeur web front-end</h3>
                                <div class="experience__caracteristics">
                                    <div>
                                        <p class="experience__caracteristics--duration">
                                            <img src="<?php echo BASE_URL ?>assets/images/icons/duration.svg" alt="Icône durée" />
                                            Septembre - Août
                                        </p>
                                        <p class="experience__caracteristics--location">
                                            <img src="<?php echo BASE_URL ?>assets/images/icons/location.svg" alt="Icône localisation" />
                                            Mulhouse
                                        </p>
                                    </div>
                                    <img class="experience__image" src="<?php echo BASE_URL ?>assets/images/logo_2le.svg" alt="Logo 2LE" />
                                </div>
                                <img class="embed-box-toggle" data-collapse="experience1" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />
                                <div class="experience__details hide" data-id="experience1">
                                    <div>
                                        <h4 class="experience__details--title">Missions confiées</h4>
                                        <p class="experience__details--content">Développement et modifications front-end des différentes applications web créées. Ergonomie et design des pages grâce aux méthodes d'UX et d'UI pour s'adapter aux besoins des clients.</p>
                                    </div>
                                    <div>
                                        <h4 class="experience__details--title">Technologies utilisées</h4>
                                        <p class="experience__details--content">
                                            <span class="label">HTML</span>
                                            <span class="label">CSS</span>
                                            <span class="label">Bootstrap</span>
                                            <span class="label">Symfony</span>
                                            <span class="label">JavaScript</span>
                                            <span class="label">Vue JS</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="experiences__box">
                    <div>
                        <h2 class="experiences__box--title">DUT MMI</h2>
                        <p class="experiences__box--date">2017 - 2019</p>
                        <span class="separator">&nbsp;</span>
                        <p class="experiences__box--description">Parcours en développement web front-end et back-end, graphisme et communication multimédia</p>
                    </div>
                    <div>
                        <div class="experience experience--empty">
                            <div class="experience__date">
                                <div class="experience__date--before"></div>
                                <div class="experience__date--item">2019</div>
                                <div class="experience__date--after"></div>
                            </div>
                            <div class="embed-box">
                                Diplôme validé
                            </div>
                        </div>
                        <div class="experience">
                            <div class="experience__date">
                                <div class="experience__date--before"></div>
                                <div class="experience__date--item">2019</div>
                                <div class="experience__date--after"></div>
                            </div>
                            <div class="embed-box">
                                <h3 class="experience__title">Stage - UI/UX designer</h3>
                                <div class="experience__caracteristics">
                                    <div>
                                        <p class="experience__caracteristics--duration">
                                            <img src="<?php echo BASE_URL ?>assets/images/icons/duration.svg" alt="Icône durée" />
                                            Avril - Juin
                                        </p>
                                        <p class="experience__caracteristics--location">
                                            <img src="<?php echo BASE_URL ?>assets/images/icons/location.svg" alt="Icône localisation" />
                                            Saverne
                                        </p>
                                    </div>
                                    <img class="experience__image" src="<?php echo BASE_URL ?>assets/images/logo_losypamo.svg" alt="Logo Losypamo" />
                                </div>
                                <img class="embed-box-toggle" data-collapse="experience2" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />
                                <div class="experience__details hide" data-id="experience2">
                                    <div>
                                        <h4 class="experience__details--title">Missions confiées</h4>
                                        <p class="experience__details--content">Analyse et critique d'un système de gestion de cartes bancaires d'un point de vue ergonomique et graphique et mise en place de certaines améliorations.</p>
                                    </div>
                                    <div>
                                        <h4 class="experience__details--title">Technologies utilisées</h4>
                                        <p class="experience__details--content">
                                            <span class="label">HTML</span>
                                            <span class="label">CSS</span>
                                            <span class="label">PrimeFaces</span>
                                            <span class="label">Java J2EE</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="experiences__box">
                    <div>
                        <h2 class="experiences__box--title">Bac S-SI</h2>
                        <p class="experiences__box--date">2014 - 2017</p>
                        <span class="separator">&nbsp;</span>
                        <p class="experiences__box--description">Parcours général et scientifique, logique informatique et électronique</p>
                    </div>
                    <div>
                        <div class="experience experience--empty">
                            <div class="experience__date">
                                <div class="experience__date--before"></div>
                                <div class="experience__date--item">2017</div>
                                <div class="experience__date--after"></div>
                            </div>
                            <div class="embed-box">
                                Diplôme obtenu - Mention Bien
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
