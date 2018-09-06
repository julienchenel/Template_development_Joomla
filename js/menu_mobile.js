jQuery.noConflict()

// comportement du bouton burger

jQuery(document).ready(function(e) {
    jQuery("#btn_menu").click(function(e) {
        jQuery("#menu_mobile").animate({ right: 0 }, 800);
    });

// comportement du bouton fermer

    jQuery("#btn_fermer").click(function(e) {
        jQuery("#menu_mobile").animate({ right: -320 }, 800);
    });
});
