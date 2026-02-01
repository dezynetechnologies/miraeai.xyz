<?php

/**
 * Enqueue scripts and styles.
 */
function masco_scripts() {



    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

    wp_enqueue_style( 'masco-custom-fonts', get_theme_file_uri( '/assets/css/general-sans.css' ), array(), null );
    wp_enqueue_style( 'font-awesomes', get_theme_file_uri( '/assets/css/all.min.css' ), array(), '5.15.1' );

	wp_enqueue_style('select2', get_theme_file_uri( '/assets/css/select2.min.css'), array(), null);
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '4.0' );
    wp_enqueue_style( 'nice-select', get_theme_file_uri( '/assets/css/nice-select.min.css' ), array(), 'null' );

    wp_enqueue_style( 'masco-core', get_theme_file_uri( '/assets/css/core.css' ), array(), MASCO_THEME_VERSION );
    wp_style_add_data( 'masco-core', 'rtl', 'replace' );

    wp_enqueue_style( 'masco-custom', get_theme_file_uri( '/assets/css/theme-style.css' ), array(), MASCO_THEME_VERSION );
    wp_style_add_data( 'masco-custom', 'rtl', 'replace' );

    wp_enqueue_style( 'masco-style', get_stylesheet_uri(), array(), MASCO_THEME_VERSION );


    wp_enqueue_style( 'masco-responsive', get_theme_file_uri( '/assets/css/theme-responsive.css' ), array(), MASCO_THEME_VERSION );
    wp_style_add_data( 'masco-responsive', 'rtl', 'replace' );

    wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script('select2', get_theme_file_uri( '/assets/js/select2.min.js'), array('jquery'), null, true);
    wp_enqueue_script( 'nice-select', get_theme_file_uri( '/assets/js/jquery.nice-select.min.js' ), array( 'jquery' ), null, true );
    wp_enqueue_script( 'masco-main', get_theme_file_uri( '/assets/js/masco-main.js' ), array( 'jquery' ), MASCO_THEME_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'masco_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function masco_theme_add_editor_styles() {
    add_editor_style( get_theme_file_uri( '/assets/css/editor-style.css' ) );
}
add_action( 'admin_init', 'masco_theme_add_editor_styles' );
