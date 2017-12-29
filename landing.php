<?php
/** Template name: CustomPageT5
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sivanPortfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			<section class="bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/desk.jpg);">

				<div class="aligncenter">
					<h1 class="page-title"> Sivan Weitz </h1>
					<p class="site-description"> A brief summary about you and your job </p>
				</div>
				<div class="nav aligncenter">
					<a href="home">Home</a>
					<a href="about">About Me</a>
					<a href="portfolio">Portfolio</a>
					<a href="work">Work with me</a>
				</div>
				<div class="social aligncenter">
					<a href="http://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="http://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="http://pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					<a href="http://youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</section>
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
