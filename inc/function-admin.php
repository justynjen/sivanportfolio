<?php

/*

@package sivanportfolio

		=============================
						ADMIN PAGE
		=============================
*/

function sivanportfolio_add_admin_page(){

	//Generate Sivan Portfolio Admin Page
	add_menu_page( 'Sivan Portfolio Options', 'Sivan', 'manage_options', 'sivan_portfolio', 'sivanportfolio_theme_create_page', 110 );

	//Generate Sican Portfolio Admin Subpages
	add_submenu_page( 'sivan_portfolio', 'Sivan Portfolio Theme Options', 'Theme Options', 'manage_options', 'sivan_portfolio_theme', 'sivan_portfolio_support_page' );
	add_submenu_page( 'sivan_portfolio', 'Sivan Portfolio Sidebar Options', 'Sidebar', 'manage_options', 'sivan_portfolio', 'sivan_portfolio_create_page' );
	add_submenu_page( 'sivan_portfolio', 'Sivan Portfolio CSS Options', 'Custom CSS', 'manage_options', 'sivan_portfolio_css', 'sivan_portfolio_theme_settings_page' );


	//activate custom settings
	add_action( 'admin_init', 'sivanportfolio_custom_settings' );

}
add_action( 'admin_menu', 'sivanportfolio_add_admin_page' );

function sivanportfolio_custom_settings() {
	//Sidebar Options
	register_setting( 'sivanportfolio-settings-group', 'profile_picture' );
	register_setting( 'sivanportfolio-settings-group', 'first_name' );
	register_setting( 'sivanportfolio-settings-group', 'last_name' );
	register_setting( 'sivanportfolio-settings-group', 'user_description' );
	register_setting( 'sivanportfolio-settings-group', 'instagram_handle', 'sivanportfolio_sanitize_instagram_handle' );
	register_setting( 'sivanportfolio-settings-group', 'facebook_handle' );
	register_setting( 'sivanportfolio-settings-group', 'twitter_handle' );

	add_settings_section( 'sivanportfolio-sidebar-options', 'Sidebar Options', 'sivanportfolio_sidebar_options', 'sivan_portfolio' );

	add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'sivanportfolio_sidebar_profile', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );
	add_settings_field( 'sidebar-name', 'Full Name', 'sivanportfolio_sidebar_name', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );
	add_settings_field( 'sidebar-name', 'Description', 'sivanportfolio_sidebar_description', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );
	add_settings_field( 'sidebar-instagram', 'Instagram Handle', 'sivanportfolio_sidebar_instagram', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );
	add_settings_field( 'sidebar-facebook', 'Facebook Handle', 'sivanportfolio_sidebar_facebook', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );
	add_settings_field( 'sidebar-twitter', 'Twitter Handle', 'sivanportfolio_sidebar_twitter', 'sivan_portfolio', 'sivanportfolio-sidebar-options' );

	//Theme Support options
	register_setting( 'sivan-portfolio-support', 'post_formats', 'sivanportfolio_post_formats_callback' );

	add_settings_section( 'sivan-portfolio-options', 'Theme Options', 'sivan_portfolio_options', 'sivan_portfolio_theme' );

	add_settings_field( 'post-formats', 'Post Formats', 'sivanportfolio_post_formats', 'sivan_portfolio_theme', 'sivan_portfolio_options' );

}
	// Post format callback functions
function sivanportfolio_post_formats_callback( $input ) {
	return $input;
}

function sivan_portfolio_options() {
	echo 'Activate and Deactivate specific theme support options';
}

function sivanportfolio_post_formats() {
		$options = get_option( 'post_formats' );
		$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
		$output = '';
		foreach( $formats as $format ){
			$checked = ( @$options[$format] == 1 ? 'checked' : '' );
			$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.'> '.$format.'</label><br>';
		}
		echo $output;
}

//Sidebar Options Functions
function sivanportfolio_sidebar_options() {
	echo 'Customize your sidebar information';
}
function sivanportfolio_sidebar_profile() {
	$picture = esc_attr( get_option( 'profile_picture' ) );
	echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" />';
}
function sivanportfolio_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$firstName.'" placeholder="Last Name" />';
}
function sivanportfolio_sidebar_description() {
	$description = esc_attr( get_option( 'user_description' ) );
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" /><p class+"description">Write something smart</p>';
}
function sivanportfolio_sidebar_instagram() {
	$instagram = esc_attr( get_option( 'instagram_handle' ) );
	echo '<input type="text" name="instagram_handle" value="'.$instagram.'" placeholder="my handle" /><p class="description">Input your Instagram username without the @ symbol</p>';
}
function sivanportfolio_sidebar_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handle' ) );
	echo '<input type="text" name="facebook_handle" value="'.$facebook.'" placeholder="my handle" /><p class="description">Input your Facebook username without the @ symbol</p>';
}
function sivanportfolio_sidebar_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handle' ) );
	echo '<input type="text" name="twitter_handle" value="'.$twitter.'" placeholder="my handle" /><p class="description">Input your Twitter username without the @ symbol</p>';
}

// Sanitization Custom settings
function sivanportfolio_sanitize_instagram_handle( $input ) {
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', '$output' );
	return $output;
}

//Template submenu Functions
function sivanportfolio_theme_create_page() {
//generation of our admin page
	require_once( get_template_directory() . '/inc/templates/sivanportfolio-admin.php' 	);
}
function sivan_portfolio_support_page() {
	require_once( get_template_directory() . '/inc/templates/sivanportfolio-support.php' );
}
function sivan_portfolio_theme_settings_page() {
//generation of our admin page
	echo '<h1>Portfolio Custom CSS</h1>';
}
