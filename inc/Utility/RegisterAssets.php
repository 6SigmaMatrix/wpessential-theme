<?php

namespace WPEssential\Theme\WPEssentialTheme\Utility;

final class RegisterAssets
{
	public static string $minify;

	public static function constructor ()
	{
		self::$minify = \WPEssential\Plugins\Utility\RegisterAssets::minify_check();
		add_filter( 'wpe/register/js', [ __CLASS__, 'register_script' ], 10000 );
		add_filter( 'wpe/register/css', [ __CLASS__, 'register_style' ], 10000 );
	}

	public static function register_script ( $list )
	{
		$minify      = self::$minify;
		$script_list = [
			'wpessential-theme-script' => WPEssential_Theme_T_URI . "assets/js/script{$minify}js",
		];
		return wp_parse_args( $script_list, $list );
	}

	public static function register_style ( $list )
	{
		$minify     = self::$minify;
		$style_list = [
			'wpessential-theme-style'      => WPEssential_Theme_T_URI . "style{$minify}css",
			'wpessential-theme-color'      => WPEssential_Theme_T_URI . "assets/css/color{$minify}css",
			'wpessential-theme-responsive' => WPEssential_Theme_T_URI . "assets/css/responsive{$minify}css",
		];

		if ( is_rtl() ) {
			$style_list[ 'wpessential-theme-rtl-style' ] = WPEssential_Theme_T_URI . "rtl-style{$minify}css";
		}
		return wp_parse_args( $style_list, $list );
	}
}
