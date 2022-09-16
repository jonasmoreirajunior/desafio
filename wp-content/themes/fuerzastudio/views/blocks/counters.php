<?php
/**
 * Title: Counters
 * Description: Counters site.
 * Keywords: fuerzastudio, counters
 * Mode: auto
 * Icon: <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z"></path></svg>
 *
 * @package Fuerza
 */

?>

<section <?php echo fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<div class="b-counters__body">
			<div class="b-counters__item">
				<div class="b-counters__icon">
					<svg class="c-icon c-icon--user">
						<use xlink:href="#icon-user"></use>
					</svg>
				</div>
				<p class="b-counters__count c-text c-text--medium">
					<strong>90+</strong>
					Users
				</p>
			</div>
			<div class="b-counters__item">
				<div class="b-counters__icon">
					<svg class="c-icon c-icon--location">
						<use xlink:href="#icon-location"></use>
					</svg>
				</div>
				<p class="b-counters__count c-text c-text--medium">
					<strong>30+</strong>
					Locations
				</p>
			</div>
			<div class="b-counters__item">
				<div class="b-counters__icon">
					<svg class="c-icon c-icon--server">
						<use xlink:href="#icon-server"></use>
					</svg>
				</div>
				<p class="b-counters__count c-text c-text--medium">
					<strong>50+</strong>
					Servers
				</p>
			</div>
		</div>
	</div>
</section>
