<?php

namespace WPEssential\Theme\WPEssentialTheme\Utility;

final class Enqueue
{
	public static function constructor ()
	{
		add_filter( 'wpe/frontend/css', [ __CLASS__, 'enqueue_css' ], 1000 );
		add_filter( 'wpe/frontend/js', [ __CLASS__, 'enqueue_js' ], 1000 );
		add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 1000 );

	}

	public static function enqueue_css ( $list )
	{
		$style_list = [
			'wpessential-theme-style',
			'wpessential-theme-color',
			'wpessential-theme-responsive',
		];
		if ( is_rtl() ) {
			$style_list[ 'wpessential-theme-rtl-style' ];
		}
		return wp_parse_args( $style_list, $list );

	}

	public static function enqueue_js ( $list )
	{
		return wp_parse_args(
			[
				'wpessential-theme-script',
			],
			$list
		);

	}

	public static function localization ( $localization )
	{
		return wp_parse_args(
			[
				'wpe_theme' => WPEssential_Theme_T_URI
			],
			$localization
		);
	}
}
