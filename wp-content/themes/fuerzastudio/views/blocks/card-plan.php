<?php
/**
 * Title: Card Plan
 * Description: Display a card plan template.
 * Keywords: card plan
 * mode: auto
 * Icon: <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z"></path></svg>
 *
 * @package Fuerza
 */

?>

<section <?php fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<div class="row">
			<header class="b-card-plan__header">
				<h2 class="b-card-plan__title c-title c-title--h2"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="b-card-plan__subtitle c-title c-title--subtitle"><?php echo wp_kses_post( $subtitle ); ?></p>
			</header>
		</div>
		<div class="row">
			<div class="b-card-plan__body">
				<?php foreach($card as $item) : ?>
					<div class="c-card-plan">
						<figure class="c-card-plan__image">
							<img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="Image Plan">
						</figure>
						<p class="c-card-plan__type c-text c-text--regular"><?php echo wp_kses_post( $item['title'] ); ?></p>
							<ul class="c-card-plan__items">
								<?php foreach( $item['options_plan'] as $option ) : ?>
									<li class="c-card-plan__item c-text c-text--small">
										<svg class="c-icon c-icon--check">
											<use xlink:href="#check"></use>
										</svg>
										<?php echo wp_kses_post( $option['option'] ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<div class="c-card-plan__footer">
							<p class="c-card-plan__price c-text c-text--big"><?php echo wp_kses_post( $item['plan'] ); ?> Plan</p>
							<a href="<?php echo esc_url( $item['link'] ); ?>" class="c-card-plan__button c-btn c-btn--primary-o c-btn--sm">Select</a>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>
