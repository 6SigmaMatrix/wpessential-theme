<?php
get_header();

do_action( 'wpe_before_loop' );

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		do_action( 'wpe_detail_loop' );
	}
}

do_action( 'wpe_after_loop' );

do_action( 'wpe_pagination' );

do_action( 'wpe_default_sidebar' );

get_footer();
