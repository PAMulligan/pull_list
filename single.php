<?php get_header(); ?>
			<div id="content">
				<div id="inner-content">
					<main id="main" class="t-2of3 d-all single-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
              <header class="article-header">
                <?php the_post_thumbnail('full') ?>
                <h1 class="h2 entry-title"><?php the_title(); ?></h1>
                <p class="byline">
              		<?php printf( __( 'Posted', 'pulllisttheme' ).' %1$s',
                    /* the time the post was published */
                    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                  ); ?>
                </p>
              </header> <?php // end article header ?>
              <section class="entry-content" itemprop="articleBody">
                <?php
                  // the content (pretty self explanatory huh)
                  the_content();
                  /*
                   * Link Pages is used in case you have posts that are set to break into
                   * multiple pages. You can remove this if you don't plan on doing that.
                   *
                   * Also, breaking content up into multiple pages is a horrible experience,
                   * so don't do it. While there are SOME edge cases where this is useful, it's
                   * mostly used for people to get more ad views. It's up to you but if you want
                   * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                   *
                   * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                   *
                  */
                  wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'pulllisttheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                  ) );
                ?>
              </section> <?php // end article section ?>
              <footer class="article-footer">
                <?php printf( __( 'Filed under', 'pulllisttheme' ).': %1$s', get_the_category_list(', ') ); ?>
                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'pulllisttheme' ) . '</span> ', ', ', '</p>' ); ?>
              </footer> <?php // end article footer ?>
              <?php //comments_template(); ?>
            </article> <?php // end article ?>
						<?php endwhile; ?>
						<?php else : ?>
							<article id="post-not-found" class="hentry">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'pulllisttheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'pulllisttheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'pulllisttheme' ); ?></p>
								</footer>
							</article>
						<?php endif; ?>
					</main>
					<?php get_sidebar(); ?>
				</div>
			</div>
<?php get_footer(); ?>