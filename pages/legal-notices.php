<?php
include('../config.php');
$page = 'legal';
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
            <h1><?php echo $translation['legal']['title']; ?></h1>
            <div class="box">
                <div class="box__wrapper box__wrapper--columns">
                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partOne']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partOne']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textTwo']; ?> </p>
                    <p><?php echo $translation['legal']['partOne']['textThree'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textFour']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partTwo']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partTwo']['text']; ?> : <a class="box__link" href="mailto:<?php echo $translation['generals']['contact']['mailTo']; ?>"><?php echo $translation['generals']['contact']['mail']; ?></a>.</p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partThree']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partThree']['text']; ?></p>
                    <div class="flex flex-column">
                        <span><?php echo $translation['legal']['host']['name']; ?></span>
                        <span><?php echo $translation['legal']['host']['address']; ?></span>
                        <span><?php echo $translation['legal']['host']['city']; ?></span>
                        <a class="box__link" href="tel:<?php echo $translation['legal']['host']['phoneTo']; ?>"><?php echo $translation['legal']['host']['phone']; ?></a>
                        <a class="box__link" href="mailto:<?php echo $translation['legal']['host']['mailTo']; ?>"><?php echo $translation['legal']['host']['mail']; ?></a>
                    </div>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partFour']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partOne']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partOne']['textTwo']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partFive']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partFive']['text']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partSix']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partSix']['text']; ?></p>

                    <h2 class="box__title box__title--left"><?php echo $translation['legal']['partSeven']['subtitle']; ?></h2>
                    <p><?php echo $translation['legal']['partSeven']['textOne'] . $_SERVER['HTTP_HOST'] . $translation['legal']['partSeven']['textTwo']; ?></p>
                    <p><?php echo $translation['legal']['partSeven']['textThree']; ?></p>
                    <p><?php echo $translation['legal']['partSeven']['textFour']; ?></p>
                    <p>
                        <button id="cookies-accept" class="button"><?php echo $translation['cookies']['enable']; ?></button>
                        <button id="cookies-decline" class="button"><?php echo $translation['cookies']['disable']; ?></button>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>