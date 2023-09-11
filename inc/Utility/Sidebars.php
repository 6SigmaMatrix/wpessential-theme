<?php

namespace WPEssential\Theme\WpessentialHeroTheme\Utility;

final class Sidebars
{
	public static function constructor ()
	{
		//add_filter( 'wpe/register/sidebars', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return wp_parse_args(
			[
				[
					'name'          => esc_html__( 'WPEssential: Footer Sidebar', 'sleepsity' ),
					'id'            => 'footer',
					'description'   => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'sleepsity' ),
					'before_widget' => '<div class="col-md-4"><div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div></div>',
					'before_title'  => '<h4 class="widget-title text-white">',
					'after_title'   => '</h4>',
				]
			],
			$list
		);
	}
}
