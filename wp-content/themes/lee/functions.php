<?php

function leesSiteEnqueueScripts() {
    wp_enqueue_style( 'style-css' , 'localhost/Wordpress/wp-content/themes/lee/style.css' );
}
add_action('wp_enqueue_scripts' , 'leesSiteEnqueueScripts')
?>