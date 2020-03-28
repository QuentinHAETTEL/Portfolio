<header>
    <div class="header">
        <div class="header__left">
            <a class="header__left--logo" href="<?php echo BASE_URL ?>" hreflang="fr">
                <img src="<?php echo BASE_URL ?>assets/images/logo/logo.svg" alt="Logo" />
            </a>
            <button id="menu-toggle" class="menu-toggle">MENU</button>
        </div>
        <ul id="menu" class="header__right hide">
            <li class="menu-item<?php echo ($page == 'presentation') ? ' menu-item--active' : '' ?>">
                <a href="<?php echo BASE_URL ?>" hreflang="fr">
                    <img src="<?php echo BASE_URL ?>assets/images/icons/presentation.svg" alt="Icône présentation" />
                    Présentation
                </a>
            </li>
            <li class="menu-item<?php echo ($page == 'experiences') ? ' menu-item--active' : '' ?>">
                <a href="<?php echo BASE_URL ?>pages/experiences.php" hreflang="fr">
                    <img src="<?php echo BASE_URL ?>assets/images/icons/experiences.svg" alt="Icône expérience" />
                    Expériences
                </a>
            </li>
            <li class="menu-item<?php echo ($page == 'skills') ? ' menu-item--active' : '' ?>">
                <a href="<?php echo BASE_URL ?>pages/skills.php" hreflang="fr">
                    <img src="<?php echo BASE_URL ?>assets/images/icons/skills.svg" alt="Icône compétences" />
                    Compétences
                </a>
            </li>
            <li class="menu-item<?php echo ($page == 'projects') ? ' menu-item--active' : '' ?>">
                <a href="<?php echo BASE_URL ?>pages/projects.php" hreflang="fr">
                    <img src="<?php echo BASE_URL ?>assets/images/icons/projects.svg" alt="Icône projets" />
                    Projets
                </a>
            </li>
            <li class="menu-item<?php echo ($page == 'contact') ? ' menu-item--active' : '' ?>">
                <a href="<?php echo BASE_URL ?>pages/contact.php" hreflang="fr">
                    <img src="<?php echo BASE_URL ?>assets/images/icons/contact.svg" alt="Icône contact" />
                    Contact
                </a>
            </li>
        </ul>
    </div>
</header>