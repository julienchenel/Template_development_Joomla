<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <jdoc:include type="head" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="templates/myTemplate/css/style.css" />
</head>

<body>


    <div id="conteneur">
        <header id="bandeau">
            <jdoc:include type="modules" name="bandeau" />
        </header>
        <nav id="menu_bureau">
            <jdoc:include type="modules" name="menu_bureau" />
            <jdoc:include type="modules" name="recherche" />
        </nav>
        <button id="btn_menu">
            <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
        </button>
        <nav id="menu_mobile">
            <button id="btn_fermer">
                <i class="fa fa-times fa-3x" aria-hidden="true"></i>
            </button>
            <jdoc:include type="modules" name="menu_mobile" />
        </nav>
        <section id="contenu">
            <jdoc:include type="component" />
        </section>

        <aside id="barre_laterale">
            <div id="newsletter">
                <jdoc:include type="modules" name="newsletter" />
            </div>

            <div id="identification">
<!--                Pour inclure un nouveau module dans une div...-->
                <jdoc:include type="modules" name="identification" />
            </div>

        <!--

        Créer une autre div qui incluera un nouveau module.
        Pensez à y ajouter une balise <jdoc:include> et à la nommer
        Il ne faut pas oublier de modifier le CSS bien sûr.

        -->

        </aside>

        <footer id="pied">
            <nav id="menu_pied">
                <jdoc:include type="modules" name="menu_pied" />
            </nav>
        </footer>
    </div>
    <script src="templates/myTemplate/js/jquery-3.3.1.min.js"></script>
    <script src="templates/myTemplate/js/menu_mobile.js"></script>

</body>

</html>
