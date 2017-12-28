<?php

/*

@package sivanportfolio

		=============================
						ADMIN ENQUEUE FUNCTIONS
		=============================
*/

function sivanportfolio_load_admin_scripts( $hook ){

	if( 'toplevel_page_sivanportfolio' != $hook ){
		return;
	}

	wp_register_style( 'sivanportfolio_admin', get_template_directory_uri() . '/css/sivanportfolio.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'sivanportfolio_admin' );

	wp_enqueue_media();

	wp_register_script( 'sivanportfolio-admin-script', get_template_directory_uri() . '/js/sivanportfolio.admin.js'. array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sivanportfolio-admin-script' );

}
add_action( 'admin_enqueue_scripts', 'sivanportfolio_load_admin_scripts' );
