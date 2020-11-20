<?php
include('../config.php');
$page = 'error';
include('generics/base.php');

require_once '../src/controllers/ErrorHttpController.php';
$error = new ErrorHttpController();
if (!isset($_GET['error']) || empty($_GET['error'])) {
    $_GET['error'] = '404';
}
?>

<body>
    <?php
    include('components/header.php');
    ?>

    <main>
        <?php
        include('components/settings_tabs.php');
        ?>

        <section class="banner">
            <div class="banner__content">
                <p class="banner__title"><?php echo $translation['generals']['error']; ?> <?php echo $_GET['error']; ?></p>
                <span class="separator">&nbsp;</span>
                <h1 class="banner__text"><?php echo $error->getErrorDescription($_GET['error']) ?></h1>
                <a class="banner__link" href="<?php echo BASE_URL; ?>"><?php echo $translation['generals']['backToHome']; ?></a>
            </div>
        </section>
    </main>
</body>
</html>
