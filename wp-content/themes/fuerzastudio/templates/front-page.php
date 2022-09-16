<?php
/**
 * Layout: views/layouts/front-page.php
 * Template Name: Front Page
 *
 * Templaate used to create a page without header and footer components.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fuerza
 */

?>
<div <?php post_class(); ?>>
	<div class="page__content">
		<?php the_content(); ?>

		<?php edit_post_link( __( 'Edit this entry.', 'fuerza' ), '<p>', '</p>' ); ?>

		<?php \Fuerza::render( 'views/partials/pagination' ); ?>
	</div>
</div>
