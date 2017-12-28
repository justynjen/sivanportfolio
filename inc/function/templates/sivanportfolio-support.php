<h1>Portfolio Theme Support</h1>
<?php settings_errors(); ?>

<form action="options.php" method="post" class="sivanportfolio-general-form">
	<?php settings_fields( 'sivan-portfolio-support' ); ?>
	<?php  do_settings_sections( 'sivan_portfolio_theme' ) ?>
	<?php  submit_button(); ?>
</form>
