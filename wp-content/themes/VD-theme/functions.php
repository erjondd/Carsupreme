<?php

add_action('wp_enqueue_scripts', 'vitaminad_scripts');
function vitaminad_scripts()
{
    wp_enqueue_style('vitaminad-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('vitaminad-js', get_template_directory_uri() . '/js/bundle.js', '', '', true);
}


/*enable svg upload*/
function add_svg_to_upload_mimes($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}

add_filter('upload_mimes', 'add_svg_to_upload_mimes', 10, 1);


//Menu

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));


//Add options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

