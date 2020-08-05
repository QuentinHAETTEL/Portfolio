<!DOCTYPE html>
<html lang="fr">

<?php
include('../config.php');
// Get the URL of the current page : testing the protocol and get the URL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
}
else {
    $protocol = 'http';
}
$globalUrl = $protocol . '://' . $_SERVER['HTTP_HOST'];
$url = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$page = '';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>Développement web full-stack Strasbourg - Mentions légales</title>
    <link rel="canonical" href="<?php echo $url ?>" />

    <link rel="shortcut icon" type="image/svg+xml" href="../assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" sizes="16x16" href="../assets/images/favicon/favicon-16.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.ico" />
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicon/favicon-32.png" />
    <link rel="shortcut icon" sizes="128x128" href="../assets/images/favicon/favicon-128.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/touch-icon-152.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/favicon/touch-icon-167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/touch-icon-180.png" />

    <meta name="author" content="Quentin HAETTEL">
    <meta name="copyright" content="Quentin HAETTEL - 2020">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/styles/main.css" />
    <script src="<?php echo BASE_URL; ?>public/scripts/main.js"></script>

    <?php
    include('components/google_analytics.php');
    ?>
</head>

<body>
    <?php
    include('components/header.php');
    ?>

    <main>
        <section class="legals">
            <h1 class="title">Mentions légales</h1>
            <div class="box">
                <div class="legals__box">
                    <h2 class="legals__box--title">A propos du site</h2>
                    <p>L’ensemble des données et les informations présentes sur le site <?php echo $_SERVER['HTTP_HOST']; ?> sont mises à disposition du public par Quentin HAETTEL</p>
                    <p>La connexion et la navigation sur le site <?php echo $_SERVER['HTTP_HOST']; ?> par l’utilisateur implique l'acceptation intégrale et sans réserve des présentes mentions légales.</p>

                    <h2 class="legals__box--title">Propriétaire</h2>
                    <p>Ce site est la propriété de Quentin HAETTEL, joignable à l'adresse : <a href="mailto:quentin.haettel@gmail.com">quentin.haettel [at] gmail.com</a>.</p>

                    <h2 class="legals__box--title">Hébergement</h2>
                    <p>Ce site est hébergé par IONOS by 1&1 :</p>
                    <div class="flex-column">
                        <span>1&1 Internet SARL</span>
                        <span>7 Place de la Gare</span>
                        <span>57200 SARREGUEMINES</span>
                        <a href="tel:0970808911">+33 (0)9 70 80 89 11</a>
                        <a href="mailto:hostmaster@1and1.fr">hostmaster [at] 1and1.fr</a>
                    </div>

                    <h2 class="legals__box--title">Directeur de publication</h2>
                    <p>L’édition et la direction de la publication du site <?php echo $_SERVER['HTTP_HOST']; ?> est assurée par Quentin HAETTEL.</p>

                    <h2 class="legals__box--title">Accès au site</h2>
                    <p>Le site est accessible, 7j/7, 24h/24 sauf cas d'interruption programmée ou non pouvant découler d’une nécessité de maintenance. En cas de modification, d'interruption ou de suspension des services, le site <?php echo $_SERVER['HTTP_HOST']; ?> ne saurait être tenu responsable.</p>

                    <h2 class="legals__box--title">Collecte de données</h2>
                    <p>Le site est exempté de déclaration à la CNIL, dans la mesure où il ne collecte aucune donnée concernant les utilisateurs.</p>

                    <h2 class="legals__box--title">Cookies</h2>
                    <p>L’utilisateur est informé que lors de ses visites sur le site <?php echo $_SERVER['HTTP_HOST']; ?>, des cookies peuvent s’installer automatiquement sur son navigateur. En naviguant sur le site, il les accepte. Il a également la possibilité de refuser cette installation, ce qui a pour effet de supprimer tous les cookies déjà installés.</p>
                    <p>Un type de cookie est obligatoire au bon fonctionnement du site, il permet de garder en mémoire le choix de l'utilisateur concernant l'acceptation ou non de l'installations d'autres cookies. Ce type de cookie ne nécessite pas l'autorisation de l'utilisateur pour être installé.</p>
                    <p>Vous pouvez modifier ici vos paramètres de cookies pour ce site :</p>
                    <button id="cookies-accept" class="button">Activer les cookies</button>
                    <button id="cookies-decline" class="button">Désactiver les cookies</button>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('components/footer.php');
    ?>
</body>
</html>