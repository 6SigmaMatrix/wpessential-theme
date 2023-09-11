<?php

namespace WPEssential\Theme\WpessentialHeroTheme\Utility;

final class Menus
{
	public static function constructor ()
	{
		//add_filter( 'wpe/register/menu', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return [
			'main_menu' => esc_html__( 'Main Menu', 'sleepsity' ),
		];
	}
}
