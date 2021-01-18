<?php

namespace WPEssential\Theme\WPEssentialThemePro\Utility;

final class RegisterAssets
{
	public static string  $minify;
	private static object $theme_info;

	public static function constructor ()
	{
		self::$minify     = \WPEssential\Plugins\Utility\RegisterAssets::minify_check();
		self::$theme_info = wpe_theme_info();

		add_filter( 'wpe/register/js', [ __CLASS__, 'register_script' ], 10000 );
		add_filter( 'wpe/register/css', [ __CLASS__, 'register_style' ], 10000 );
	}

	public static function register_script ( $list )
	{
		$minify      = self::$minify;
		$theme_info  = self::$theme_info;
		$script_list = [
			"{$theme_info->LowerNameDash}-script" => WPEssential_Theme_Pro_T_URI . "assets/js/script{$minify}js",
		];
		return wp_parse_args( $script_list, $list );
	}

	public static function register_style ( $list )
	{

		$minify     = self::$minify;
		$theme_info = self::$theme_info;
		$style_list = [
			"{$theme_info->LowerNameDash}-fonts"      => WPEssential_Theme_Pro_T_URI . "assets/css/fonts{$minify}css",
			"{$theme_info->LowerNameDash}-style"      => WPEssential_Theme_Pro_T_URI . "style{$minify}css",
			"{$theme_info->LowerNameDash}-color"      => WPEssential_Theme_Pro_T_URI . "assets/css/color{$minify}css",
			"{$theme_info->LowerNameDash}-responsive" => WPEssential_Theme_Pro_T_URI . "assets/css/responsive{$minify}css",
		];

		if ( is_rtl() ) {
			$style_list[ "{$theme_info->LowerNameDash}-rtl-style" ] = WPEssential_Theme_Pro_T_URI . "rtl-style{$minify}css";
		}
		return wp_parse_args( $style_list, $list );
	}

	public static function ver_check ( $ver = WPEssential_Theme_T_VERSION )
	{
		if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG || defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) {
			return time();
		} else {
			return $ver;
		}
	}
}
