<?php

// side bars

function okh_sidebars() {

    register_sidebar( array (
        'name'          => __( 'barra lateral', 'okh'  ),
        'id'            => "main-sidebar",
        'description'   => __( 'Widget barra lateral', 'okh'  ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => "</h3>\n",

    ));


}


add_action('widgets_init', 'okh_sidebars');