<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BlogMerce
 */

get_header();
?>
<section class="section blog-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-md-12 col-12">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );?>

						<?php if ( comments_open() || get_comments_number() ) :?>
							<?php comments_template(); ?>
						<?php endif;?>

					<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
