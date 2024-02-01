<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogMerce
 */

?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="single-inner">
						<div class="post-details">
							<div class="main-content-head">
								<div class="meta-information">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<ul class="meta-info">
										<li><?php blogmerce_posted_on();?></li>
										<li><?php blogmerce_posted_by();?></li>
									</ul>
								</div>
								<div class="post-thumbnils">
								<?php blogmerce_post_thumbnail(); ?>
								</div>
								<div class="detail-inner">
									<?php the_content(); ?>

									<div class="entry-content">
										<?php

										wp_link_pages(
											array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogmerce' ),
												'after'  => '</div>',
											)
										);
										?>
									</div><!-- .entry-content -->

									<?php if ( get_edit_post_link() ) : ?>
										<footer class="entry-footer">
											<?php
											edit_post_link(
												sprintf(
													wp_kses(
														/* translators: %s: Name of current post. Only visible to screen readers */
														__( 'Edit <span class="screen-reader-text">%s</span>', 'blogmerce' ),
														array(
															'span' => array(
																'class' => array(),
															),
														)
													),
													wp_kses_post( get_the_title() )
												),
												'<span class="edit-link">',
												'</span>'
											);
											?>
										</footer><!-- .entry-footer -->
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</article><!-- #post-<?php the_ID(); ?> -->
			