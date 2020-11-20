<?php
include('../config.php');
$page = 'projects';
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
            <h1><?php echo $translation['projects']['title']; ?></h1>
            <div class="card__wrapper">
                <div class="card" data-card>
                    <picture class="card__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_start-from-scratch.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_start-from-scratch.jpg" alt="<?php echo $translation['projects']['projectOne']['image']; ?>">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title"><?php echo $translation['projects']['projectOne']['name']; ?></h3>
                        <span class="separator"></span>
                        <p class="card__category"><?php echo $translation['projects']['projectOne']['category']; ?></p>

                        <div class="card__details">
                            <p class="card__text"><?php echo $translation['projects']['projectOne']['description']; ?></p>
                            <div>
                                <span><?php echo $translation['languages']['HTML']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['PHP']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['SQL']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['JS']; ?></span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/start-from-scratch" target="_blank"><?php echo $translation['projects']['showProject']; ?></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-card>
                    <picture class="project__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_admin-panel.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_admin-panel.jpg" alt="<?php echo $translation['projects']['projectTwo']['image']; ?>">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title"><?php echo $translation['projects']['projectTwo']['name']; ?></h3>
                        <span class="separator"></span>
                        <p class="card__category"><?php echo $translation['projects']['projectTwo']['category']; ?></p>

                        <div class="card__details">
                            <p class="card__text"><?php echo $translation['projects']['projectTwo']['description']; ?></p>
                            <div>
                                <span><?php echo $translation['languages']['HTML']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['CSS']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['JS']; ?></span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/admin-panel/public" target="_blank"><?php echo $translation['projects']['showProject']; ?></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-card>
                    <picture class="project__image">
                        <source srcset="<?php echo BASE_URL; ?>assets/images/project_snake.webp">
                        <img src="<?php echo BASE_URL; ?>assets/images/project_snake.jpg" alt="<?php echo $translation['projects']['projectThree']['image']; ?>">
                    </picture>
                    <div class="card__description" data-card-details>
                        <h3 class="card__title"><?php echo $translation['projects']['projectThree']['name']; ?></h3>
                        <span class="separator"></span>
                        <p class="card__category"><?php echo $translation['projects']['projectThree']['category']; ?></p>

                        <div class="card__details">
                            <p class="card__text"><?php echo $translation['projects']['projectThree']['description']; ?></p>
                            <div>
                                <span><?php echo $translation['languages']['HTML']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['CSS']; ?></span>
                                <span class="separator--vertical"></span>
                                <span><?php echo $translation['languages']['JS']; ?></span>
                            </div>
                            <a class="button button--center" href="https://projets.quentin-haettel.fr/snake" target="_blank"><?php echo $translation['projects']['showProject']; ?></a>
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