				<div id="sidebar2" class="sidebar m-all t-1of3" role="complementary">
					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar2' ); ?>
					<?php else : ?>
						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>
						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'pulllisttheme' );  ?></p>
						</div>
					<?php endif; ?>
				</div>