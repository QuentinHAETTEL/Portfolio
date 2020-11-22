<footer>
    <div class="footer">
        <p class="footer__copyrights"><?php echo $translation['footer']['copyrights'].' - '.date('Y'); ?></p>
        <a class="footer__logo" href="<?php echo BASE_URL; ?>" hreflang="<?php echo $lang; ?>">
            <img src="<?php echo BASE_URL; ?>assets/images/logo/logo.svg" alt="Logo" />
        </a>
        <div class="footer__links">
            <a class="footer__link" href="<?php echo BASE_URL; ?>mentions-legales"><?php echo $translation['legal']['title']; ?></a>
            <a class="footer__link" href="<?php echo BASE_URL; ?>plan-du-site"><?php echo $translation['sitemap']['title']; ?></a>
        </div>
        <p class="footer__version">v 1.3.1</p>
    </div>
</footer>