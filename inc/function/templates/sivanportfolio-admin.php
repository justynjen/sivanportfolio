<h1>Portfolio Theme Options</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post">
	<?php settings_fields( 'sivanportfolio-settings-group' ); ?>
	<?php do_settings_sections( 'sivan_portfolio' ) ?>
	<?php submit_button(); ?>
</form>
