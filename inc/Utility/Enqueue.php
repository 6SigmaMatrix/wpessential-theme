<?php

namespace WPEssential\Theme\WPEssentialThemePro\Utility;

final class Enqueue
{
	private static object $theme_info;

	public static function constructor ()
	{
		self::$theme_info = wpe_theme_info();
		add_filter( 'wpe/frontend/css', [ __CLASS__, 'enqueue_css' ], 1000 );
		add_filter( 'wpe/frontend/js', [ __CLASS__, 'enqueue_js' ], 1000 );
		add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 1000 );

	}

	public static function enqueue_css ( $list )
	{
		$theme_info = self::$theme_info;
		$style_list = [
			'fancybox',
			'slick',
			'slick-theme',
			"{$theme_info->LowerNameDash}-fonts",
			"{$theme_info->LowerNameDash}-style",
			"{$theme_info->LowerNameDash}-color",
			"{$theme_info->LowerNameDash}-responsive",
		];
		if ( is_rtl() ) {
			$style_list[ "{$theme_info->get('LowerNameDash')}-rtl-style" ];
		}
		return wp_parse_args( $style_list, $list );

	}

	public static function enqueue_js ( $list )
	{
		$theme_info = self::$theme_info;
		return wp_parse_args(
			[
				"{$theme_info->LowerNameDash}-script",
			],
			$list
		);

	}

	public static function localization ( $localization )
	{
		return wp_parse_args(
			[
				'wpe_theme' => WPEssential_Theme_Pro_T_URI
			],
			$localization
		);
	}
}
