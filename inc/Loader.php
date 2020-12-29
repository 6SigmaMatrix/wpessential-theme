<?php

namespace WPEssential\Theme\WPEssentialTheme;

final class Loader
{
	public static function constructor ()
	{
		self::load_files();
		self::start();
		add_action( 'wpe_before_theme_setup', [ __CLASS__, 'init' ], 1000 );
		define( 'WPE_KIRKI', true );
	}

	public static function init ()
	{
		load_theme_textdomain( 'wpessential-theme', WPEssential_Theme_T_DIR . 'languages' );
	}

	public static function load_files ()
	{
		require_once WPEssential_Theme_T_DIR . 'inc/Functions/general.php';
	}

	public static function start ()
	{
		Utility\RegisterAssets::constructor();
		Utility\Enqueue::constructor();
	}
}
