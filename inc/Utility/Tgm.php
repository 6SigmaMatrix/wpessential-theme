<?php

namespace WPEssential\Theme\WPEssentialTheme\Utility;

final class Tgm
{
	public static function constructor ()
	{
		add_filter( 'wpe/register/plugins', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return [
			'wpessential' => [
				'name' => 'WPEssential', // The plugin name.
				'slug' => 'wpessential', // The plugin slug (typically the folder name).
			],
			'kirki'       => [
				'name' => 'Kirki', // The plugin name.
				'slug' => 'kirki', // The plugin slug (typically the folder name).
			],
			'elementor'   => [
				'name' => 'Elementor', // The plugin name.
				'slug' => 'elementor', // The plugin slug (typically the folder name).
			],
		];
	}
}

