<?php
/**
 * Title: Features
 * Description: Display a list of features that you offer.
 * Keywords: features
 * mode: auto
 * Icon: <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z"></path></svg>
 *
 * @package Fuerza
 */

?>

<section <?php fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<div class="b-features__body">
			<figure class="b-features__picture">
				<?php echo wp_get_attachment_image( $image, 'full' ); ?>
			</figure>

			<div class="b-features__content">
				<h2 class="b-features__title c-title c-title--h2">
					<?php echo wp_kses_post( $title ); ?>
				</h2>
				<p class="b-features__subtitle c-title c-title--subtitle"><?php echo wp_kses_post( $subtitle ); ?></p>
				<ul class="b-features__items">
					<?php if ( ! empty( $items ) ) : ?>
						<?php foreach ( $items as $feature ) : ?>
						<li class="b-features__item c-text c-text--small">
							<svg class="c-icon c-icon--check">
								<use xlink:href="#check-circle"></use>
							</svg>
							<?php echo esc_html( $feature['description'] ); ?>
						</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>
