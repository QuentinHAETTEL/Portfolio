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

$page = 'skills';

$translations = new TranslationController();
$lang = $translations->getLanguage();
$translation = $translations->getTranslations($lang);
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
            <h1><?php echo $translation['skills']['title']; ?></h1>
            <div class="box">
                <h2 class="box__title"><?php echo $translation['skills']['frontend']; ?></h2>
                <div class="box__wrapper box__wrapper--full-height" data-toggle-parent>
                    <div class="label__list">
                        <span class="label label-toggle" data-toggle="1"><?php echo $translation['languages']['HTML']; ?></span>
                        <span class="label label-toggle" data-toggle="2"><?php echo $translation['languages']['CSS']; ?></span>
                        <span class="label label-toggle" data-toggle="3"><?php echo $translation['languages']['JS']; ?></span>
                    </div>

                    <div class="embed-box" data-toggle-id="1">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['HTML']; ?></h3>
                        <span class="embed-box__toggle" data-collapse="skill1">
                            <?php include('../assets/images/icons/collapse.html'); ?>
                        </span>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="90"></div>
                            <p class="progress-bar__percentage">90%</p>
                        </div>

                        <div class="hide" data-id="skill1">
                            <h4><?php echo $translation['skills']['usagesTitle']; ?></h4>
                            <p class="embed-box__text"><?php echo $translation['skills']['HTMLusages']; ?></p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="2">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['CSS']; ?></h3>
                        <span class="embed-box__toggle" data-collapse="skill2">
                            <?php include('../assets/images/icons/collapse.html'); ?>
                        </span>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="85"></div>
                            <p class="progress-bar__percentage">85%</p>
                        </div>

                        <div class="hide" data-id="skill2">
                            <h4><?php echo $translation['skills']['usagesTitle']; ?></h4>
                            <p class="embed-box__text"><?php echo $translation['skills']['CSSusages']; ?></p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="3">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['JS']; ?></h3>
                        <span class="embed-box__toggle" data-collapse="skill3">
                            <?php include('../assets/images/icons/collapse.html'); ?>
                        </span>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="80"></div>
                            <p class="progress-bar__percentage">80%</p>
                        </div>

                        <div class="hide" data-id="skill3">
                            <h4><?php echo $translation['skills']['usagesTitle']; ?></h4>
                            <p class="embed-box__text"><?php echo $translation['skills']['JSusages']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <h2 class="box__title"><?php echo $translation['skills']['libraries']; ?></h2>
                <div class="box__wrapper box__wrapper--full-height" data-toggle-parent>
                    <div class="label__list">
                        <span class="label label-toggle" data-toggle="4"><?php echo $translation['languages']['Bootstrap']; ?></span>
                        <span class="label label-toggle" data-toggle="5"><?php echo $translation['languages']['Vue']; ?></span>
                        <span class="label label-toggle" data-toggle="6"><?php echo $translation['languages']['React']; ?></span>
                    </div>

                    <div class="embed-box" data-toggle-id="4">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Bootstrap']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="85"></div>
                            <p class="progress-bar__percentage">85%</p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="5">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Vue']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="60"></div>
                            <p class="progress-bar__percentage">60%</p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="6">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['React']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="50"></div>
                            <p class="progress-bar__percentage">50%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <h2 class="box__title"><?php echo $translation['skills']['backend']; ?></h2>
                <div class="box__wrapper box__wrapper--full-height" data-toggle-parent>
                    <div class="label__list">
                        <span class="label label-toggle" data-toggle="7"><?php echo $translation['languages']['PHP']; ?></span>
                        <span class="label label-toggle" data-toggle="8"><?php echo $translation['languages']['SQL']; ?></span>
                    </div>

                    <div class="embed-box" data-toggle-id="7">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['PHP']; ?></h3>
                        <span class="embed-box__toggle" data-collapse="skill7">
                            <?php include('../assets/images/icons/collapse.html'); ?>
                        </span>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="80"></div>
                            <p class="progress-bar__percentage">80%</p>
                        </div>

                        <div class="hide" data-id="skill7">
                            <h4><?php echo $translation['skills']['usagesTitle']; ?></h4>
                            <p class="embed-box__text"><?php echo $translation['skills']['PHPusages']; ?></p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="8">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['SQL']; ?></h3>
                        <span class="embed-box__toggle" data-collapse="skill8">
                            <?php include('../assets/images/icons/collapse.html'); ?>
                        </span>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="90"></div>
                            <p class="progress-bar__percentage">90%</p>
                        </div>

                        <div class="hide" data-id="skill8">
                            <h4><?php echo $translation['skills']['usagesTitle']; ?></h4>
                            <p class="embed-box__text"><?php echo $translation['skills']['SQLusages']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <h2 class="box__title"><?php echo $translation['skills']['frameworks']; ?></h2>
                <div class="box__wrapper box__wrapper--full-height" data-toggle-parent>
                    <div class="label__list">
                        <span class="label label-toggle" data-toggle="9"><?php echo $translation['languages']['Symfony']; ?></span>
                        <span class="label label-toggle" data-toggle="10"><?php echo $translation['languages']['Laravel']; ?></span>
                    </div>

                    <div class="embed-box" data-toggle-id="9">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Symfony']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="55"></div>
                            <p class="progress-bar__percentage">55%</p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="10">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Laravel']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="50"></div>
                            <p class="progress-bar__percentage">50%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <h2 class="box__title"><?php echo $translation['skills']['CMS']; ?></h2>
                <div class="box__wrapper box__wrapper--full-height" data-toggle-parent>
                    <div class="label__list">
                        <span class="label label-toggle" data-toggle="11"><?php echo $translation['languages']['Wordpress']; ?></span>
                        <span class="label label-toggle" data-toggle="12"><?php echo $translation['languages']['Drupal']; ?></span>
                        <span class="label label-toggle" data-toggle="13"><?php echo $translation['languages']['Prestashop']; ?></span>
                    </div>

                    <div class="embed-box" data-toggle-id="11">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Wordpress']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="90"></div>
                            <p class="progress-bar__percentage">90%</p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="12">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Drupal']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="85"></div>
                            <p class="progress-bar__percentage">85%</p>
                        </div>
                    </div>

                    <div class="embed-box hide" data-toggle-id="13">
                        <h3 class="embed-box__title"><?php echo $translation['languages']['Prestashop']; ?></h3>

                        <div class="progress-bar">
                            <div class="progress-bar__bar" data-progress="85"></div>
                            <p class="progress-bar__percentage">85%</p>
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
