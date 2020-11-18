<!DOCTYPE html>
<html lang="fr">

<?php
include('../config.php');
include '../src/controllers/TranslationController.php';

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

$translations = new TranslationController();
$lang = $translations->getLanguage();
$translation = $translations->getTranslations($lang);
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
            <h1><?php echo $translation['experiences']['title']; ?></h1>
            <div class="box">
                <div class="box__wrapper box__wrapper--thirds">
                    <div>
                        <h2 class="box__title"><?php echo $translation['experiences']['experienceThree']['name']; ?></h2>
                        <p class="box__subtitle"><?php echo $translation['experiences']['experienceThree']['period']; ?></p>
                        <span class="separator">&nbsp;</span>
                        <p class="box__text"><?php echo $translation['experiences']['experienceThree']['description']; ?></p>
                    </div>
                    <div>
                        <div class="embed-box__wrapper">
                            <div class="timeline">
                                <div class="timeline__before"></div>
                                <div class="timeline__dot"><?php echo $translation['experiences']['experienceThree']['stepOne']['year']; ?></div>
                                <div class="timeline__after"></div>
                            </div>
                            <div class="embed-box embed-box--large">
                                <h3 class="embed-box__title"><?php echo $translation['experiences']['experienceThree']['stepOne']['name']; ?></h3>
                                <div class="text-caracteristics">
                                    <div>
                                        <p class="xsmall-text">
                                            <img class="text-caracteristics__icon" src="<?php echo BASE_URL ?>assets/images/icons/duration.svg" alt="<?php echo $translation['experiences']['durationIcon']; ?>" />
                                            <?php echo $translation['experiences']['experienceThree']['stepOne']['duration']; ?>
                                        </p>
                                        <p class="xsmall-text">
                                            <img class="text-caracteristics__icon" src="<?php echo BASE_URL ?>assets/images/icons/location.svg" alt="<?php echo $translation['experiences']['locationIcon']; ?>" />
                                            <?php echo $translation['experiences']['experienceThree']['stepOne']['location']; ?>
                                        </p>
                                    </div>
                                    <img class="text-caracteristics__image" src="<?php echo BASE_URL ?>assets/images/logo_2le.svg" alt="<?php echo $translation['experiences']['experienceThree']['stepOne']['image']; ?>" />
                                </div>
                                <span class="embed-box__toggle" data-collapse="experience1">
                                    <?php include('../assets/images/icons/collapse.html'); ?>
                                </span>
                                <div class="embed-box__details hide" data-id="experience1">
                                    <div>
                                        <h4><?php echo $translation['experiences']['missionsTitle']; ?></h4>
                                        <p class="embed-box__text"><?php echo $translation['experiences']['experienceThree']['stepOne']['missions']; ?></p>
                                    </div>
                                    <div>
                                        <h4><?php echo $translation['experiences']['technologiesTitle']; ?></h4>
                                        <p>
                                            <span class="label"><?php echo $translation['languages']['HTML']; ?></span>
                                            <span class="label"><?php echo $translation['languages']['CSS']; ?></span>
                                            <span class="label"><?php echo $translation['languages']['Bootstrap']; ?></span>
                                            <span class="label"><?php echo $translation['languages']['Symfony']; ?></span>
                                            <span class="label"><?php echo $translation['languages']['JS']; ?></span>
                                            <span class="label"><?php echo $translation['languages']['Vue']; ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box__wrapper box__wrapper--thirds">
                    <div>
                        <h2 class="box__title"><?php echo $translation['experiences']['experienceTwo']['name']; ?></h2>
                        <p class="box__subtitle"><?php echo $translation['experiences']['experienceTwo']['period']; ?></p>
                        <span class="separator">&nbsp;</span>
                        <p class="box__text"><?php echo $translation['experiences']['experienceTwo']['description']; ?></p>
                    </div>
                    <div>
                        <div class="embed-box__wrapper">
                            <div class="timeline">
                                <div class="timeline__before"></div>
                                <div class="timeline__dot"><?php echo $translation['experiences']['experienceTwo']['stepTwo']['year']; ?></div>
                                <div class="timeline__after"></div>
                            </div>
                            <div class="embed-box embed-box--large">
                                <?php echo $translation['experiences']['experienceTwo']['stepTwo']['description']; ?>
                            </div>
                        </div>
                        <div class="embed-box__wrapper">
                            <div class="timeline">
                                <div class="timeline__before"></div>
                                <div class="timeline__dot"><?php echo $translation['experiences']['experienceTwo']['stepOne']['year']; ?></div>
                                <div class="timeline__after"></div>
                            </div>
                            <div class="embed-box embed-box--large">
                                <h3 class="embed-box__title"><?php echo $translation['experiences']['experienceTwo']['stepOne']['name']; ?></h3>
                                <div class="text-caracteristics">
                                    <div>
                                        <p class="xsmall-text">
                                            <img class="text-caracteristics__icon" src="<?php echo BASE_URL ?>assets/images/icons/duration.svg" alt="<?php echo $translation['experiences']['durationIcon']; ?>" />
                                            <?php echo $translation['experiences']['experienceTwo']['stepOne']['duration']; ?>
                                        </p>
                                        <p class="xsmall-text">
                                            <img class="text-caracteristics__icon" src="<?php echo BASE_URL ?>assets/images/icons/location.svg" alt="<?php echo $translation['experiences']['locationIcon']; ?>" />
                                            <?php echo $translation['experiences']['experienceTwo']['stepOne']['location']; ?>
                                        </p>
                                    </div>
                                    <img class="text-caracteristics__image" src="<?php echo BASE_URL ?>assets/images/logo_losypamo.svg" alt="<?php echo $translation['experiences']['experienceTwo']['stepOne']['image']; ?>" />
                                </div>
                                <span class="embed-box__toggle" data-collapse="experience2">
                                    <?php include '../assets/images/icons/collapse.html'; ?>
                                </span>
                                <div class="embed-box__details hide" data-id="experience2">
                                    <div>
                                        <h4><?php echo $translation['experiences']['missionsTitle']; ?></h4>
                                        <p class="embed-box__text"><?php echo $translation['experiences']['experienceTwo']['stepOne']['missions']; ?></p>
                                    </div>
                                    <div>
                                        <h4><?php echo $translation['experiences']['technologiesTitle']; ?></h4>
                                        <p>
                                            <span class="label"><?php echo $translation['languages']['HTML'] ?></span>
                                            <span class="label"><?php echo $translation['languages']['CSS'] ?></span>
                                            <span class="label"><?php echo $translation['languages']['Primefaces'] ?></span>
                                            <span class="label"><?php echo $translation['languages']['J2EE'] ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box__wrapper box__wrapper--thirds">
                    <div>
                        <h2 class="box__title"><?php echo $translation['experiences']['experienceOne']['name']; ?></h2>
                        <p class="box__subtitle"><?php echo $translation['experiences']['experienceOne']['period']; ?></p>
                        <span class="separator">&nbsp;</span>
                        <p class="box__text"><?php echo $translation['experiences']['experienceOne']['description']; ?></p>
                    </div>
                    <div>
                        <div class="embed-box__wrapper">
                            <div class="timeline">
                                <div class="timeline__before"></div>
                                <div class="timeline__dot"><?php echo $translation['experiences']['experienceOne']['step']['year']; ?></div>
                                <div class="timeline__after"></div>
                            </div>
                            <div class="embed-box embed-box--large">
                                <?php echo $translation['experiences']['experienceOne']['step']['description']; ?>
                            </div>
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
