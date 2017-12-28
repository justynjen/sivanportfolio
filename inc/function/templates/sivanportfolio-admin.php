<h1>Portfolio Sidebar Options</h1>
<?php settings_errors(); ?>

<?php

	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option( 'user_description' ) );

 ?>

<div class="sivanportfolio-sidebar-preview">
	<div class="sivanportfolio-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview"class="profile-picture" style="background-image: url(<?php print $picture; ?>);">
			</div>
		</div>
		<h1 class="sivanportfolio-username"><?php print $fullName; ?></h1>
		<h2 class="sivanportfolio-description"><?php print $description; ?></h2>
		<div class="icons-wrapper">

		</div>
	</div>
</div>

<form action="options.php" method="post" class="sivanportfolio-general-form">
	<?php settings_fields( 'sivanportfolio-settings-group' ); ?>
	<?php do_settings_sections( 'sivan_portfolio' ) ?>
	<?php submit_button(); ?>
</form>
