<?php

namespace WPEssential\Theme\WpessentialHeroTheme\Assets;

final class AssetsInit
{
	public static function constructor ()
	{
		self::run();
	}

	private static function run ()
	{
		RegisterAssets::constructor();
		Enqueue::constructor();
		Tgm::constructor();
	}
}
