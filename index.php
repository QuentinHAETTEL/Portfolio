<?php
include('config.php');
$page = 'presentation';
include('pages/generics/base.php');
?>

<body>
    <?php
        include('pages/components/header.php');
    ?>

    <main>
        <?php
        include('pages/components/settings_tabs.php');
        ?>

        <section class="banner">
            <div class="banner__content">
                <p class="banner__title"><?php echo $translation['presentation']['name']; ?></p>
                <span class="separator">&nbsp;</span>
                <h1 class="banner__text"><?php echo $translation['presentation']['jobPartOne']; ?><br /><?php echo $translation['presentation']['jobPartTwo']; ?></h1>
            </div>
        </section>

        <section id="presentation" class="presentation">
            <h2 class="h1"><?php echo $translation['presentation']['title']; ?></h2>
            <div class="box">
                <div class="box__wrapper box__wrapper--between">
                    <p class="box__text box__text--small"><?php echo $translation['presentation']['descriptionPartOne']; ?><strong class="normal-text"><?php echo $translation['presentation']['descriptionPartTwo']; ?></strong><?php echo $translation['presentation']['descriptionPartThree']; ?></p>
                    <picture class="box__image">
                        <source srcset="assets/images/photo_presentation.webp" type="image/webp">
                        <img src="assets/images/photo_presentation.jpg" alt="<?php echo $translation['presentation']['picture']; ?>">
                    </picture>
                    <p class="box__text box__text--small"><?php echo $translation['presentation']['descriptionPartFour']; ?></p>
                </div>
            </div>
        </section>

        <?php
        include('pages/components/cookies_banner.php');
        ?>
    </main>

    <?php
    include('pages/components/footer.php');
    ?>
</body>
</html>