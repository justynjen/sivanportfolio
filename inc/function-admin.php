<?php

/*

@package sivanportfolio

		=============================
						ADMIN PAGE
		=============================
*/

function sivanportfolio_add_admin_page(){

	add_menu_page( 'Sivan Portfolio Options', 'Sivan', 'manage_options', 'sivan-portfolio', 'sivanportfolio_theme_create_page', 110 );

}
add_action( 'admin_menu', 'sivanportfolio_add_admin_page' ); 
function sivanportfolio_theme_create_page(){
//generation of our admin page
}
