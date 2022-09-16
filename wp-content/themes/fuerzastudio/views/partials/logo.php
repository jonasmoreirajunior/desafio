<?php
/**
 * Displays the site logo. Falls back to the site name.
 *
 * @package Fuerza
 */

?>
<h1 class="c-logo c-logo-main">
	<a href="<?php echo esc_url( site_url( '/' ) ); ?>">
		<?php if (has_custom_logo()) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<?php bloginfo('title'); ?>
		<?php endif; ?>
	</a>
</h1>
