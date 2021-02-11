<?php get_header(); ?>
			<div id="content">
				<div id="inner-content">
						<main id="main" class="t-2of3 d-5of7" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
								<header class="article-header">
									<?php the_post_thumbnail('bones-thumb-300', 'class=mobile-img'); ?>
									<?php the_post_thumbnail('bones-thumb-600', 'class=tablet-img'); ?>
									<?php the_post_thumbnail('bones-thumb-900', 'class=desktop-img'); ?>
									<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p class="byline">
										<?php printf( __( 'Posted', 'bonestheme' ).' %1$s', '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'); ?>
									</p>
								</header>
								<section class="entry-content">
									<?php the_excerpt(); ?>
								</section>
								<footer class="article-footer">
									<button class="blue-btn"><a href="<?php the_permalink(); ?>">Read More...</a></button>
								</footer>
							</article>
							<?php endwhile; ?>
									<?php bones_page_navi(); ?>
							<?php else : ?>
									<article id="post-not-found" class="hentry">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
						</main>
					<?php get_sidebar(); ?>
				</div>
			</div>
<?php get_footer(); ?>