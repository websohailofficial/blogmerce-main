<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogMerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-12'); ?>>
		<div class="single-blog">
			<div class="blog-img">
				<?php blogmerce_post_thumbnail(); ?>
			</div>
			<div class="blog-content">
				<?php the_category();?>
				<?php
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					?>
				<?php the_excerpt(); ?>
				<div class="autor">
					<?php blogmerce_posted_by(); ?>
					<ul class="meta-content">
						<li>
							<?php blogmerce_posted_on(); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
