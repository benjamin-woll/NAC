<?php
/**
 * The Single Post content template file.
 *
 * @package ThinkUpThemes
 */
?>

			<?php thinkup_input_postmeta(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>