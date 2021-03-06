			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap cf">
					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'pulllisttheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'pull_list_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
				</div>
			</footer>
		</div>
		<?php // all js scripts are loaded in library/pull-list.php ?>
		<?php wp_footer(); ?>
		<div id="responsive-menu" class="panel mobile-menu">
			<?php wp_nav_menu( array('theme_location', 'primary')); ?>
		</div>
		<script>jQuery('.menu-link').bigSlide({
      menu: '.mobile-menu',
      speed: 300,
      side:"right",
      easyClose:true});
		</script>
	</body>
</html> <!-- end of site. what a ride! -->
