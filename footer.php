/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sivanPortfolio
 */

<?php

	</div><!-- #content -->

	<footer id="colophon" class="site-footer centered">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sivanportfolio' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sivanportfolio' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'sivanportfolio' ), 'sivanportfolio', '<a href="http://justynjen.com/">Justyn Gourdin</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
