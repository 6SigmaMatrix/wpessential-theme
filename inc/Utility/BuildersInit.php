<?php

namespace WPEssential\Theme\WpessentialHeroThemes\Utility;

use WPEssential\Theme\WpessentialHeroThemes\Builders\Elementor\Utility\Elementor;

final class BuildersInit
{
	public static function constructor ()
	{
		self::builders();
	}

	private static function builders ()
	{
		if ( did_action( 'elementor/loaded' ) ) {
			Elementor::constructor();
		}
	}
}
