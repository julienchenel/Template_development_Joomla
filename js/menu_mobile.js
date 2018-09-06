jQuery.noConflict()

// comportement du bouton burger

jQuery(document).ready(function(e) {
    jQuery("#btn_menu").click(function(e) {
        jQuery("#menu_mobile").animate({ right: 0 }, 800);
    });

// comportement du bouton fermer

    // Un petit peu JQuery ! A vous de créer la fonction !
    // C'est quasiii la même que la fonction ci-dessus...

});
