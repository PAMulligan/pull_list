<?php get_header(); ?>
			<div id="content">
				<div id="inner-content">
					<main id="main" class="t-2of3 d-all" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<div class="landing-post">
							<?php $comic_query = new WP_Query(array(
								'posts_per_page' => 5,
								'category_name' => 'comics',
							));
							?>
							<?php if ($comic_query->have_posts()) : while ($comic_query->have_posts()) : $comic_query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
								<header class="article-header">
									<?php the_post_thumbnail('bones-thumb-300', 'class=mobile-img'); ?>
									<?php the_post_thumbnail('bones-thumb-600', 'class=tablet-img'); ?>
									<?php the_post_thumbnail('bones-thumb-900', 'class=desktop-img'); ?>
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline">
										<?php printf( __( 'Posted', 'bonestheme' ).' %1$s',
											/* the time the post was published */
											'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
										); ?>
									</p>
								</header>
								<section class="entry-content" itemprop="articleBody">
									<?php the_content(); ?>
								</section>
								<footer class="article-footer">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>
										<?php printf( '<p class="footer-category">' . __('Filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
										<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
								</footer>
							</article>
							<?php endwhile; ?>
									<?php pull_list_page_navi(); ?>
							<?php else : ?>
									<article id="post-not-found" class="hentry">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
						</div>
						<div class="landing-post">
							<?php $music_query = new WP_Query(array(
								'posts_per_page' => 5,
								'category_name' => 'music',
							));
							?>
							<?php if ($music_query->have_posts()) : while ($music_query->have_posts()) : $music_query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
								<header class="article-header">
									<?php the_post_thumbnail('bones-thumb-300', 'class=mobile-img'); ?>
									<?php the_post_thumbnail('bones-thumb-600', 'class=tablet-img'); ?>
									<?php the_post_thumbnail('bones-thumb-900', 'class=desktop-img'); ?>
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline">
										<?php printf( __( 'Posted', 'bonestheme' ).' %1$s',
																				/* the time the post was published */
																				'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
										); ?>
									</p>
								</header>
								<section class="entry-content">
									<?php the_content(); ?>
								</section>
								<footer class="article-footer">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>
										<?php printf( '<p class="footer-category">' . __('Filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
										<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
								</footer>
							</article>
							<?php endwhile; ?>
									<?php pull_list_page_navi(); ?>
							<?php else : ?>
									<article id="post-not-found" class="hentry">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
						</div>
					</main>
					<?php get_sidebar(); ?>
				</div>
			</div>
<?php get_footer(); ?>
