<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap cf">
					<main id="main" class="t-2of3 d-all archive-main" role="main">
						<h1 class="archive-title h2"><span><?php _e( 'Search Results for:', 'pulllisttheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
								<header class="article-header">
									<?php the_post_thumbnail('bones-thumb-300', 'class=mobile-img'); ?>
									<?php the_post_thumbnail('bones-thumb-600', 'class=tablet-img'); ?>
									<?php the_post_thumbnail('bones-thumb-900', 'class=desktop-img'); ?>
									<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  						<p class="byline">
                    							<?php printf( __( 'Posted %1$s', 'pulllisttheme' ),
                   							    /* the time the post was published */
                   							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                    							); ?>
                  						</p>
								</header>
								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'pulllisttheme' ) . '</span>' ); ?>
								</section>
								<footer class="article-footer">
									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'Filed under: %1$s', 'pulllisttheme' ), get_the_category_list(', ') ); ?>
                  					<?php endif; ?>
                 					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'pulllisttheme' ) . '</span> ', ', ', '</p>' ); ?>
								</footer> <!-- end article footer -->
							</article>
						<?php endwhile; ?>
								<?php pull_list_page_navi(); ?>
							<?php else : ?>
									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'pulllisttheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'pulllisttheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'pulllisttheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
						</main>
							<?php get_sidebar(); ?>
					</div>
			</div>
<?php get_footer(); ?>