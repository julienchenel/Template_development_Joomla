
jQuery.noConflict()
jQuery(document).ready(function(e) {
    jQuery("#btn_menu").click(function(e) {
        jQuery("#menu_mobile").animate({ right: 0 }, 800);
    });

    jQuery("#btn_fermer").click(function(e) {
        jQuery("#menu_mobile").animate({ right: -320 }, 800);
    });
});
