<?php

namespace WPEssential\Theme\WpessentialHeroTheme\Assets;

final class RegisterAssets
{
	private static object $theme_info;

	public static function constructor ()
	{
		self::$theme_info = wpe_theme_info();

		add_filter( 'wpe/register/js', [ __CLASS__, 'register_script' ], 10000 );
		add_filter( 'wpe/register/css', [ __CLASS__, 'register_style' ], 10000 );
	}

	public static function register_script ( $list )
	{
		$theme_info  = self::$theme_info;
		$script_list = [
			"{$theme_info->LowerNameDash}-script" => [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/js/script',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			],
		];
		return wp_parse_args( $script_list, $list );
	}

	public static function register_style ( $list )
	{
		$theme_info = self::$theme_info;
		$style_list = [
			"{$theme_info->LowerNameDash}-style"      => [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/css/style',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			],
			"{$theme_info->LowerNameDash}-fonts"      => [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/css/fonts',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			],
			"{$theme_info->LowerNameDash}-color"      => [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/css/color',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			],
			"{$theme_info->LowerNameDash}-responsive" => [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/css/responsive',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			],
		];

		if ( is_rtl() ) {
			$style_list[ "{$theme_info->LowerNameDash}-rtl-style" ] = [
				'link' => Wpessential_Hero_Theme_T_URI . 'assets/css/rtl-style',
				'dep'  => false,
				'ver'  => Wpessential_Hero_Theme_T_VER
			];
		}
		return wp_parse_args( $style_list, $list );
	}
}
