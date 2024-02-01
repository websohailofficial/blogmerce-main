<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogMerce
 */

?>

<footer class="footer">
        <!-- Start Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-4' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
        <!--/ End Footer Top -->
	<!-- Start Footer Bottom -->
	<div class="footer-bottom">
		<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blogmerce' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s.', 'blogmerce' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'blogmerce' ), 'blogmerce', '<a href="https://blogmerce.io">BlogMerce Team</a>' );
					?>
			</div><!-- .site-info -->
		</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
