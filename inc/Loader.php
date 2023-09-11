<?php

namespace WPEssential\Theme\WpessentialHeroTheme;

use WPEssential\Theme\WpessentialHeroTheme\Assets\AssetsInit;
use WPEssential\Theme\WpessentialHeroTheme\Utility\Images;
use WPEssential\Theme\WpessentialHeroTheme\Utility\Menus;
use WPEssential\Theme\WpessentialHeroTheme\Utility\Requesting;
use WPEssential\Theme\WpessentialHeroTheme\Utility\Sidebars;
use WPEssential\Theme\WpessentialHeroTheme\Utility\Widgets;

final class Loader
{
	public static function constructor ()
	{
		self::load_files();
		self::start();
		add_action( 'wpe_before_theme_setup', [ __CLASS__, 'init' ], 1000 );
		wpe_maybe_define_constant( 'WPE_KIRKI', true );
	}

	public static function init ()
	{
		load_theme_textdomain( 'wpessential-theme', Wpessential_Hero_Theme_T_DIR . 'languages' );
	}

	public static function load_files ()
	{
		require_once Wpessential_Hero_Theme_T_DIR . 'inc/Functions/general.php';
	}

	public static function start ()
	{
		AssetsInit::constructor();
		Requesting::constructor();
		Images::constructor();
		Sidebars::constructor();
		Menus::constructor();
		Widgets::constructor();
	}
}
