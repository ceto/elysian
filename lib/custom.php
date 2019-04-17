<?php
    // 1. customize ACF path
    add_filter('acf/settings/path', 'brick_acf_settings_path');
    function brick_acf_settings_path( $path ) {
        $path = get_stylesheet_directory() . '/lib/acf/';
        return $path;
    }

    // 2. customize ACF dir
    add_filter('acf/settings/dir', 'brick_acf_settings_dir');
    function brick_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
    }

    // 3. Hide ACF field group menu item
    //add_filter('acf/settings/show_admin', '__return_false');

    // 4. Include ACF
    include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

    // 5. Unhide native metabox
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');



    add_filter('body_class', 'elysian_body_classes');
    function elysian_body_classes($classes) {
        global $post;
        if ( is_page_template('tmpl-prices.php') || is_404() || is_page_template('tmpl-contact.php') ) {
            $classes[] = 'page-has-glass-banner';
        }
        return $classes;
    }

?>