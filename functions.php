<?php

require_once get_template_directory() . '/vendor/autoload.php';

define( 'WPE_REG_MENUS', true );
define( 'WPE_REG_SIDEBARS', true );
define( 'WPE_GEN_SUPPORT', true );
define( 'WPE_REG_WIDGETS', true );

if ( class_exists( '\WPEssential\Theme\Loader' ) ) {
	\WPEssential\Theme\Loader::constructor();
	if ( has_action( 'wpe_setup_theme' ) ) {
		do_action( 'wpe_setup_theme' );
	}
}
