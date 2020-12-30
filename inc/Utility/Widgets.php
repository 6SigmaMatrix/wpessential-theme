<?php

namespace WPEssential\Theme\WPEssentialTheme\Utility;

final class Widgets
{
	public static function constructor ()
	{
		//add_filter( 'wpe/register/widgets', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return wp_parse_args(
			[
				'\WPEssential\Theme\Sleepsity\Widgets\About',
				'\WPEssential\Theme\Sleepsity\Widgets\Link',
				'\WPEssential\Theme\Sleepsity\Widgets\Text',
				'\WPEssential\Theme\Sleepsity\Widgets\Categories',
			],
			$list
		);
	}
}
