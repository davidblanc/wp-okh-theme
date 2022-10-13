<?php
// archivo de registro y cargar de scripts y Estilos



function okh_theme_styles() {

    // registrando Estilos
    wp_register_style ('okh-styles', get_stylesheet_uri(),'','1.0','all');

    //cargar estilo 

    wp_enqueue_style( 'okh-styles');


}

add_action('wp_enqueue_scripts', 'okh_theme_styles');



// registrando y cargar de scripts 

function okh_theme_scripts() {
    //registrar scripts 

    wp_register_script('cookies', THEMEROOT . '/js/cookie.js','','1.0',true);
    wp_register_script('sc', THEMEROOT . '/js/sc.js','','1.0',true);
    wp_register_script('octane', THEMEROOT . '/js/octane.js','','1.0',true);

    // cargar scripts 

    wp_enqueue_scripts('cookies');
    wp_enqueue_scripts('sc');
    wp_enqueue_scripts('octane')
;
}
