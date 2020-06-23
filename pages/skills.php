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

$page = 'skills';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Développement web full-stack Strasbourg - Compétences</title>
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
    <meta property="og:title" content="Développement web full-stack Strasbourg - Compétences" />
    <meta property="og:description" content="Création ou refonte de sites web, intégration front-end et développement back-end." />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="<?php echo $globalUrl ?>" />
    <meta property="og:image" content="<?php echo $globalUrl ?>/assets/images/logo/logo_opengraph.jpg" />
    <meta property="og:image:alt" content="Logo Quentin HAETTEL - Développeur web full-stack" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:height" content="310" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Développement web full-stack Strasbourg - Compétences" />
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
        <section class="skills">
            <h1 class="title">Compétences</h1>
            <div class="box">
                <div class="skills__box">
                    <h2 class="skills__box--title">Front-end</h2>
                    <div class="skill" data-toggle-parent>
                        <div class="skills__box--list">
                            <span class="label label-toggle" data-toggle="1">HTML</span>
                            <span class="label label-toggle" data-toggle="2">CSS</span>
                            <span class="label label-toggle" data-toggle="3">JavaScript</span>
                        </div>

                        <div class="embed-box" data-toggle-id="1">
                            <h3 class="skill__title">HTML</h3>
                            <img class="embed-box-toggle" data-collapse="skill1" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="90"></div>
                                <p class="skill__level--percentage">90%</p>
                            </div>

                            <div class="skill__details hide" data-id="skill1">
                                <h4 class="skill__details--title">Principales utilisations</h4>
                                <p class="skill__details--content">Développement de sites ergonomiques et respectueux des standards du Web. Intégration de maquettes et templates. Utilisation de moteurs de templating.</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="2">
                            <h3 class="skill__title">CSS</h3>
                            <img class="embed-box-toggle" data-collapse="skill2" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="85"></div>
                                <p class="skill__level--percentage">85%</p>
                            </div>

                            <div class="skill__details hide" data-id="skill2">
                                <h4 class="skill__details--title">Principales utilisations</h4>
                                <p class="skill__details--content">Développement de sites responsives et design en suivant les principes d'UI et d'UX. Utilisation de préprocesseurs SCSS et LESS.</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="3">
                            <h3 class="skill__title">JavaScript</h3>
                            <img class="embed-box-toggle" data-collapse="skill3" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="80"></div>
                                <p class="skill__level--percentage">80%</p>
                            </div>

                            <div class="skill__details hide" data-id="skill3">
                                <h4 class="skill__details--title">Principales utilisations</h4>
                                <p class="skill__details--content">Dynamisation de sites web et utilisation de la technologie Ajax pour un rendu interactif. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="skills__box">
                    <h2 class="skills__box--title">Librairies</h2>
                    <div class="skill" data-toggle-parent>
                        <div class="skills__box--list">
                            <span class="label label-toggle" data-toggle="4">Bootstrap</span>
                            <span class="label label-toggle" data-toggle="5">Vue.js</span>
                            <span class="label label-toggle" data-toggle="6">React</span>
                        </div>

                        <div class="embed-box" data-toggle-id="4">
                            <h3 class="skill__title">Bootstrap</h3>

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="85"></div>
                                <p class="skill__level--percentage">85%</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="5">
                            <h3 class="skill__title">Vue.js</h3>

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="60"></div>
                                <p class="skill__level--percentage">60%</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="6">
                            <h3 class="skill__title">React</h3>

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="50"></div>
                                <p class="skill__level--percentage">50%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="skills__box">
                    <h2 class="skills__box--title">Back-end</h2>
                    <div class="skill" data-toggle-parent>
                        <div class="skills__box--list">
                            <span class="label label-toggle" data-toggle="7">PHP</span>
                            <span class="label label-toggle" data-toggle="8">SQL</span>
                        </div>

                        <div class="embed-box" data-toggle-id="7">
                            <h3 class="skill__title">PHP</h3>
                            <img class="embed-box-toggle" data-collapse="skill7" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="85"></div>
                                <p class="skill__level--percentage">75%</p>
                            </div>

                            <div class="skill__details hide" data-id="skill7">
                                <h4 class="skill__details--title">Principales utilisations</h4>
                                <p class="skill__details--content">Conception d'applications web complexes grâce au modèle de programmation MVC.</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="8">
                            <h3 class="skill__title">SQL</h3>
                            <img class="embed-box-toggle" data-collapse="skill8" src="<?php echo BASE_URL ?>assets/images/icons/collapse.svg" alt="Icône voir plus" />

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="60"></div>
                                <p class="skill__level--percentage">90%</p>
                            </div>

                            <div class="skill__details hide" data-id="skill8">
                                <h4 class="skill__details--title">Principales utilisations</h4>
                                <p class="skill__details--content">Gestion de bases de données MySQL et liaison avec la code PHP.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="skills__box">
                    <h2 class="skills__box--title">Frameworks</h2>
                    <div class="skill" data-toggle-parent>
                        <div class="skills__box--list">
                            <span class="label label-toggle" data-toggle="9">Symfony</span>
                            <span class="label label-toggle" data-toggle="10">Laravel</span>
                        </div>

                        <div class="embed-box" data-toggle-id="9">
                            <h3 class="skill__title">Symfony</h3>

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="55"></div>
                                <p class="skill__level--percentage">55%</p>
                            </div>
                        </div>

                        <div class="embed-box hide" data-toggle-id="10">
                            <h3 class="skill__title">Laravel</h3>

                            <div class="skill__level">
                                <div class="skill__level--bar" data-progress="50"></div>
                                <p class="skill__level--percentage">50%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
