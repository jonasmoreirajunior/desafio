<?php
/**
 * Title: Locations
 * Description: Display a locations map template.
 * Keywords: location map
 * mode: auto
 *
 * @package Fuerza
 */

?>

<section <?php fuerza_block_attrs( $block ); ?>>
	<div class="container">
		<header class="b-locations__header">
			<h2 class="b-locations__title c-title c-title--h2">Huge Global Network of Fast VPN</h2>
			<p class="b-locations__subtitle c-title c-title--subtitle">See <strong>LaslesVPN</strong> everywhere to make it easier for you when you move locations.</p>
		</header>

		<figure class="b-locations__image">
			<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/huge-global.png' ) ) ?>" alt="Locations">
		</figure>

		<ul class="b-locations__companies">
			<li class="b-locations__company">
				<figure class="b-locations__company-figure">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/netflix.png' ) ) ?>" alt="Netflix">
				</figure>
			</li>
			<li class="b-locations__company">
				<figure class="b-locations__company-figure">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/reddit.png' ) ) ?>" alt="Reddit">
				</figure>
			</li>
			<li class="b-locations__company">
				<figure class="b-locations__company-figure">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/amazon.png' ) ) ?>" alt="Amazon">
				</figure>
			</li>
			<li class="b-locations__company">
				<figure class="b-locations__company-figure">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/discord.png' ) ) ?>" alt="Discord">
				</figure>
			</li>
			<li class="b-locations__company">
				<figure class="b-locations__company-figure">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/spotify.png' ) ) ?>" alt="Spotify">
				</figure>
			</li>
		</ul>
	</div>
</section>
