<?php
/**
 * Displays the slider.
 *
 * @package Fuerza
 */

$slider_params = [
	'navigation' => [
		'nextEl' => '.swiper-button-next',
		'prevEl' => '.swiper-button-prev',
	],
];
?>
<style>
	.swiper-slide {
		align-items: center;
		display: flex;
		height: 600px;
		justify-content: center;
		text-align: center;
	}

	.swiper-slide:nth-child(1) {
		background-color: #e54b4b;
	}

	.swiper-slide:nth-child(2) {
		background-color: #ffa987;
	}

	.swiper-slide:nth-child(3) {
		background-color: #444140;
	}
</style>

<div class="c-slider swiper" data-slider-params='<?php echo esc_attr( wp_json_encode( $slider_params ) ); ?>'>
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">Slide 1</div>
		<div class="swiper-slide">Slide 2</div>
		<div class="swiper-slide">Slide 3</div>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>

	<!-- If we need scrollbar -->
	<div class="swiper-scrollbar"></div>
</div>
