<?php
include('../config.php');
$page = 'skills';
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
