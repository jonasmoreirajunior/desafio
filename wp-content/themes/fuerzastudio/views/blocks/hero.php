<?php
/**
 * Title: Hero
 * Description: Hero site.
 * Keywords: fuerzastudio, hero
 * Mode: auto
 * Icon: <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z"></path></svg>
 *
 * @package Fuerza
 */

?>

<section <?php echo fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 b-hero__content">
				<h1 class="c-title c-title--h1 b-hero__title">
					<?php echo wp_kses_post( $title ); ?>
				</h1>

				<div class="c-text b-hero__text">
					<?php echo wp_kses_post( $text ); ?>
				</div>

				<?php fuerza_component( 'button-collection', $buttons + [ 'class' => 'b-hero__buttons' ] ); ?>
			</div>
			<div class="col-12 col-lg-6">
				<figure class="b-hero__image">
					<img src="<?php echo esc_attr( $image_hero ); ?>" alt="Image Hero">
				</figure>
			</div>
		</div>
	</div>
</section>
