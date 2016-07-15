<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agbotic
 */

?>

	</div><!-- #content -->

	<?php get_sidebar('image'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<?php agb_social_menu(); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'agb' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'agb' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'agb' ), 'agb', '<a href="https://joshisadesigner.github.io" rel="designer">Joshisadesigner</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
