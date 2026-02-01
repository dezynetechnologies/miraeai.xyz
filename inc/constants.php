<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// theme version
if(! defined('MASCO_THEME_VERSION') ){
    define('MASCO_THEME_VERSION', wp_get_theme()->get('Version'));
} 

// Define the DHRUBOK Folder
if( ! defined( 'MASCO_DIR' ) ) {
	define('MASCO_DIR', get_template_directory() );
}

// Define the DHRUBOK Partials Folder
if( ! defined( 'MASCO_PARTIALS_DIR' ) ) {
	define('MASCO_PARTIALS_DIR', trailingslashit( MASCO_DIR ) . 'partials' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_ASSETS_DIR' ) ) {
	define('MASCO_ASSETS_DIR', trailingslashit( MASCO_DIR ) . 'assets' );
}


// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_INC_DIR' ) ) {
	define('MASCO_INC_DIR', trailingslashit( MASCO_DIR ) . 'inc' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_FRAMEWORK_DIR' ) ) {
	define('MASCO_FRAMEWORK_DIR', trailingslashit( MASCO_INC_DIR ) . 'framework' );
}

// Define the Libs Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_LIBS_DIR' ) ) {
	define('MASCO_LIBS_DIR', trailingslashit( MASCO_DIR ) . 'libs' );
}

// Define the Shortcodes Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_SHORTCODES_DIR' ) ) {
	define('MASCO_SHORTCODES_DIR', trailingslashit( MASCO_INC_DIR ) . 'shortcodes' );
}

// Define the Classes Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_CLASSES_DIR' ) ) {
	define('MASCO_CLASSES_DIR', trailingslashit( MASCO_INC_DIR ) . 'classes' );
}

// Define the Widgets Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_WIDGETS_DIR' ) ) {
	define('MASCO_WIDGETS_DIR', trailingslashit( MASCO_INC_DIR ) . 'widgets' );
}


// Define the PLUGINS Folder of the DHRUBOK Directory
if( ! defined( 'MASCO_INC_PLUGINS_DIR' ) ) {
	define('MASCO_INC_PLUGINS_DIR', trailingslashit( MASCO_INC_DIR ) . 'plugins' );
}
