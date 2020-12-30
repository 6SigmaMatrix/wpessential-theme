<?php

namespace WPEssential\Theme\WPEssentialTheme\Utility;

final class Images
{
	public static function constructor ()
	{
		//add_filter( 'wpe/register/images/size', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return wp_parse_args(
			[
				'540x298' => [
					'name'  => 'sleepsitiy_540x298',
					'size'  => [
						'w' => 540,
						'h' => 298
					],
					'croup' => true
				],
				'350x236' => [
					'name'  => 'sleepsitiy_350x236',
					'size'  => [
						'w' => 350,
						'h' => 236
					],
					'croup' => true
				],
				'255x187' => [
					'name'  => 'sleepsitiy_255x187',
					'size'  => [
						'w' => 255,
						'h' => 187
					],
					'croup' => true
				],
				'350x157' => [
					'name'  => 'sleepsitiy_350x157',
					'size'  => [
						'w' => 350,
						'h' => 157
					],
					'croup' => true
				],
				'343x192' => [
					'name'  => 'sleepsitiy_343x192',
					'size'  => [
						'w' => 343,
						'h' => 192
					],
					'croup' => true
				],
				'720x266' => [
					'name'  => 'sleepsitiy_720x266',
					'size'  => [
						'w' => 720,
						'h' => 266
					],
					'croup' => true
				]
			],
			$list
		);
	}
}

