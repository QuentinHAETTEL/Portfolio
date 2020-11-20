<?php
include('../config.php');
$page = 'contact';
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
            <h1><?php echo $translation['contact']['title']; ?></h1>
            <div class="box contact">
                <div class="box__wrapper box__wrapper--middle">
                    <form id="contact-form" class="form" method="POST" action="#">
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--firstname"><?php echo $translation['contact']['firstname']; ?> :</label>
                            <input id="contact--firstname" class="form__field" type="text" name="firstname" placeholder="<?php echo $translation['contact']['firstname']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['firstname']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--lastname"><?php echo $translation['contact']['lastname']; ?> :</label>
                            <input id="contact--lastname" class="form__field" type="text" name="lastname" placeholder="<?php echo $translation['contact']['lastname']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['lastname']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--email"><?php echo $translation['contact']['email']; ?> :</label>
                            <input id="contact--email" class="form__field" type="email" name="email" placeholder="<?php echo $translation['contact']['email']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['email']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--object"><?php echo $translation['contact']['subject']; ?> :</label>
                            <input id="contact--object" class="form__field" type="text" name="object" placeholder="<?php echo $translation['contact']['subject']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['subject']; ?>" />
                        </div>
                        <div class="form__field-wrapper" data-input-container>
                            <label class="form__label" for="contact--message"><?php echo $translation['contact']['message']; ?> :</label>
                            <textarea id="contact--message" class="form__field form__field--textarea" name="message" placeholder="<?php echo $translation['contact']['message']; ?>" required="required" data-placeholder="<?php echo $translation['contact']['message']; ?>"></textarea>
                        </div>

                        <div class="form__checkbox-wrapper">
                            <input id="contact--rgpd" type="checkbox" name="rgpd" required="required" />
                            <label class="form__label-checkbox" for="contact--rgpd"><?php echo $translation['contact']['rgpd']; ?> : <a href="mailto:<?php echo $translation['generals']['contact']['mailTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['mail'] ?></a>.</label>
                        </div>

                        <button class="button button--center" type="submit"><?php echo $translation['generals']['send']; ?></button>
                    </form>

                    <div class="contact__infos">
                        <div class="social-icons">
                            <a class="social-icons__item" href="https://www.linkedin.com/in/quentin-haettel/" target="_blank">
                                <?php include('../assets/images/icons/linkedin.html'); ?>
                            </a>
                            <a class="social-icons__item" href="https://www.facebook.com/quentin.haettel" target="_blank">
                                <?php include('../assets/images/icons/facebook.html'); ?>
                            </a>
                            <a class="social-icons__item" href="https://github.com/QuentinHAETTEL/" target="_blank">
                                <?php include('../assets/images/icons/github.html'); ?>
                            </a>
                        </div>
                        <a href="<?php echo BASE_URL; ?>data/CV.pdf" class="button" download="CV-HAETTEL_Quentin.pdf" target="_blank">
                            <img class="button__icon" src="<?php echo BASE_URL ?>assets/images/icons/download.svg" alt="<?php echo $translation['contact']['downloadIcon']; ?>" />
                            <?php echo $translation['contact']['downloadCV']; ?>
                        </a>
                        <div class="box__text">
                            <a class="box__text--link" href="mailto:<?php echo $translation['generals']['contact']['mailTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['mail'] ?></a>
                            <a class="box__text--link" href="tel:<?php echo $translation['generals']['contact']['phoneTo'] ?>" target="_blank"><?php echo $translation['generals']['contact']['phone'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include('components/popup.php');
        ?>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>