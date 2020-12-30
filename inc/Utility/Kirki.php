<?php

namespace WPEssential\Theme\WPEssentialThemes\Utility;

final class Kirki
{
	public static function constructor ()
	{
		add_filter( 'wpe/kirki/register/panels', [ __CLASS__, 'panels' ] );
		add_filter( 'wpe/kirki/register/sections', [ __CLASS__, 'sections' ] );
		add_filter( 'wpe/kirki/register/controls', [ __CLASS__, 'controls' ] );
	}

	public static function panels ( $list )
	{
		return [ '' ];
	}

	public static function sections ( $list )
	{
		return [
			'about-widget-section',
			'footer-section',
			'mattress-section',
			'topbar-section',
			'blog-settings'
		];
	}

	public static function controls ( $list )
	{
		return [
			'about-widget-control',
			'footer-control',
			'mattress-control',
			'topbar-control',
			'blog-settings-control'
		];
	}
}

