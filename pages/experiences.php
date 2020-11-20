<?php
include('../config.php');
$page = 'experiences';
include('generics/base.php');
?>

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
