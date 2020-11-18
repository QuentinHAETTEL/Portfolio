<header>
    <div class="header">
        <div class="header__left">
            <a class="header__logo" href="<?php echo BASE_URL ?>" hreflang="<?php echo $translation['lang']; ?>">
                <img src="<?php echo BASE_URL ?>assets/images/logo/logo.svg" alt="<?php echo $translation['header']['logoTitle']; ?>" />
            </a>
            <button id="menu-toggle" class="menu__toggle"><?php echo $translation['header']['menu']; ?></button>
        </div>
        <ul id="menu" class="header__right menu mobile-hide">
            <li class="menu__item<?php echo ($page == 'presentation') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>presentation" hreflang="<?php echo $translation['lang']; ?>">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/presentation.svg" alt="<?php echo $translation['header']['presentationIcon']; ?>" />
                    <?php echo $translation['header']['presentationItem']; ?>
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'experiences') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>experiences" hreflang="<?php echo $translation['lang']; ?>">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/experiences.svg" alt="<?php echo $translation['header']['experiencesIcon']; ?>" />
                    <?php echo $translation['header']['experiencesItem']; ?>
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'skills') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>competences" hreflang="<?php echo $translation['lang']; ?>">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/skills.svg" alt="<?php echo $translation['header']['skillsIcon']; ?>" />
                    <?php echo $translation['header']['skillsItem']; ?>
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'projects') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>projets" hreflang="<?php echo $translation['lang']; ?>">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/projects.svg" alt="<?php echo $translation['header']['projectsIcon']; ?>" />
                    <?php echo $translation['header']['projectsItem']; ?>
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'contact') ? ' menu-item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>contact" hreflang="<?php echo $translation['lang']; ?>">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/contact.svg" alt="<?php echo $translation['header']['contactIcon']; ?>" />
                    <?php echo $translation['header']['contactItem']; ?>
                </a>
            </li>
        </ul>
    </div>
</header>