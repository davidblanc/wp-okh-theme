<?php

// Registrando zonas de menus



function okh_menus() {

    register_nav_menus(array(
        'main-menu' => __('Menu principal en encabezado','okh')
    ));

}


add_action('init', 'okh_menus');