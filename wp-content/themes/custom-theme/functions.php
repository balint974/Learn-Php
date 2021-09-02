<?php  

    function Site_resources(){
        wp_enqueue_style('main_style',get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','Site_resources');

?>
