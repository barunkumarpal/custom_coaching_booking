<?php
function cbp_enqueue_styles(){
    wp_enqueue_script('customjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'ccb_custom_js', plugins_url('/inc/js/custom.js', CBP_PLUGIN_PATH), ['customjquery'], '1.0.0', true );

    wp_localize_script('customjquery', 'ccb_plgn_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

}