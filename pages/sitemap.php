<?php
include('../config.php');
$page = 'sitemap';
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

    <section class="legals">
        <h1><?php echo $translation['sitemap']['title']; ?></h1>
        <div class="box">
            <div class="box__wrapper box__wrapper--columns">
                <ul class="list">
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>"><?php echo $translation['presentation']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>experiences"><?php echo $translation['experiences']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>competences"><?php echo $translation['skills']['title']; ?></a></li>
                    <li class="list__item">
                        <a href="<?php echo BASE_URL; ?>projets"><?php echo $translation['projects']['title']; ?></a>
                        <ul>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/start-from-scratch/"><?php echo $translation['projects']['projectOne']['name']; ?></a></li>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/admin-panel/public"><?php echo $translation['projects']['projectTwo']['name']; ?></a></li>
                            <li class="list__item"><a href="https://projets.quentin-haettel.fr/snake"><?php echo $translation['projects']['projectThree']['name']; ?></a></li>
                        </ul>
                    </li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>contact"><?php echo $translation['contact']['title']; ?></a></li>
                    <li class="list__item"><a href="<?php echo BASE_URL; ?>mentions-legales"><?php echo $translation['legal']['title']; ?></a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
include('components/footer.php');
?>
</body>
</html>