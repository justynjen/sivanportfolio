<?php
/* Template name: CustomPageT3 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php

	<section>
		echo "<h2 class="aligncenter">Portfolio Heading</h2>"
		<div class="grid-center">
				<div class="col-6 aligncenter">
					<img src="images/desk.jpeg" alt="">
				</div>
				<div class="col-6 aligncenter">
					<h3>About Me</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
		</div>
	</section>
	<section class="aligncenter">
		<h3>Blog Writing</h3>
		<div class="grid-center">
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
			<div class="col-2_xs-6">
				<button type="button" name="button">Sample</button>
			</div>
		</div>
	</section>


	?>

	</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
