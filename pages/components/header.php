<header>
    <div class="header">
        <div class="header__left">
            <a class="header__logo" href="<?php echo BASE_URL ?>" hreflang="fr">
                <img src="<?php echo BASE_URL ?>assets/images/logo/logo.svg" alt="Logo" />
            </a>
            <button id="menu-toggle" class="menu__toggle">MENU</button>
        </div>
        <ul id="menu" class="header__right menu mobile-hide">
            <li class="menu__item<?php echo ($page == 'presentation') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>presentation" hreflang="fr">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/presentation.svg" alt="Icône présentation" />
                    Présentation
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'experiences') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>experiences" hreflang="fr">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/experiences.svg" alt="Icône expérience" />
                    Expériences
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'skills') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>competences" hreflang="fr">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/skills.svg" alt="Icône compétences" />
                    Compétences
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'projects') ? ' menu__item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>projets" hreflang="fr">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/projects.svg" alt="Icône projets" />
                    Projets
                </a>
            </li>
            <li class="menu__item<?php echo ($page == 'contact') ? ' menu-item--active' : '' ?>">
                <a class="menu__link" href="<?php echo BASE_URL ?>contact" hreflang="fr">
                    <img class="menu__icon" src="<?php echo BASE_URL ?>assets/images/icons/contact.svg" alt="Icône contact" />
                    Contact
                </a>
            </li>
        </ul>
    </div>
</header>