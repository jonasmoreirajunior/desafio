<?php
/**
 * Title: Trusted
 * Description: Display a trusted by thousands template.
 * Keywords: trusted thousands happy
 * mode: auto
 *
 * @package Fuerza
 */

$slider_params = [
	'slidesPerView' => 'auto',
	'spaceBetween'  => 60,
	'navigation'    => [
		'nextEl' => '.c-slider__button-next',
		'prevEl' => '.c-slider__button-prev',
	],
	'pagination' => [
		'el' => '.swiper-pagination',
	],
];
?>

<section <?php fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<header class="b-trusted__header">
			<h2 class="b-trusted__title c-title c-title--h2">Trusted by Thousands of Happy Customer</h2>
			<p class="b-trusted__subtitle c-title c-title--subtitle">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
		</header>
		<div class="c-slider swiper" data-slider-params='<?php echo esc_attr( wp_json_encode( $slider_params ) ); ?>'>
			<div class="c-cards-trusted swiper-wrapper">
				<?php foreach ( $slider as $item ) : ?>
					<div class="c-cards-trusted__item swiper-slide">
						<header class="c-cards-trusted__header">
							<figure class="c-cards-trusted__avatar">
								<img src="<?php echo esc_url( $item['picture']['url'] ); ?>" alt="Avatar">
							</figure>
							<div class="c-cards-trusted__personal">
								<p class="c-cards-trusted__name c-text c-text--regular">
									<?php echo wp_kses_post( $item['name'] ); ?>
								</p>
								<span class="c-cards-trusted__location c-text c-text--small">
									<?php echo wp_kses_post( $item['location'] ); ?>
								</span>
							</div>
							<div class="c-cards-trusted__count">
								<span class="c-text c-text--normal"><?php echo wp_kses_post( $item['score'] ); ?></span>
								<svg class="c-icon c-icon--yellow-star">
									<use xlink:href="#yellow-star" />
								</svg>
							</div>
						</header>

						<div class="c-cards-trusted__content c-text c-text--normal">
							<?php echo wp_kses_post( $item['text'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="c-slider__actions">
				<div class="swiper-pagination"></div>
				<div class="c-slider__navigation">
					<div class="c-slider__button-prev">
						<svg class="c-icon c-icon--arrow-left">
							<use xlink:href="#arrow-left"></use>
						</svg>
					</div>
					<div class="c-slider__button-next">
						<svg class="c-icon c-icon--arrow-right">
							<use xlink:href="#arrow-right"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
