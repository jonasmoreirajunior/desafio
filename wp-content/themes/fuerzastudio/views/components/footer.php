<?php
/**
 * Displays the footer.
 *
 * @package Fuerza
 */

?>
<footer class="c-footer">
	<div class="container c-footer__container">
		<div class="c-footer__subscribe">
			<div class="c-footer__subscribe-left">
				<h2 class="c-footer__subscribe-title c-title c-title--h2">Subscribe Now for Get Special Features!</h2>
				<p class="c-footer__subscribe-subtitle c-text c-text--normal">Let's subscribe with us and find the fun.</p>
			</div>
			<button class="c-btn c-button c-btn--primary">Subscribe Now</button>
		</div>

		<div class="c-footer__left">
			<div class="c-header__logo">
				<?php fuerza_partial( 'logo' ); ?>
			</div>
			<p class="c-footer__description c-title c-title--subtitle">
				<strong>LaslesVPN</strong> is a private virtual network that has unique features and has high security.
			</p>
			<div class="c-footer__social">
				<a href="#facebook" class="c-footer__social-link">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/facebook.png' ) ) ?>" alt="Facebook">
				</a>
				<a href="#twitter" class="c-footer__social-link">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/twitter.png' ) ) ?>" alt="Twitter">
				</a>
				<a href="#instagram" class="c-footer__social-link">
					<img src="<?php echo esc_url( \Fuerza::core()->assets()->getAssetUrl( 'images/instagram.png' ) ) ?>" alt="Instagram">
				</a>
			</div>
			<p class="c-footer__copyright"><?php echo esc_html( $copyright ); ?></p>
		</div>
		<div class="c-footer__right">
			<ul class="c-footer__menu">
				<p class="c-text c-text--regular">Product</p>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Download</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Pricing</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Locations</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Server</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Countries</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Blog</a>
				</li>
			</ul>

			<ul class="c-footer__menu">
				<p class="c-text c-text--regular">Engage</p>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">LaslesVPN ?</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">FAQ</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Tutorials</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">About Us</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Privacy Policy</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Terms of Service</a>
				</li>
			</ul>

			<ul class="c-footer__menu">
				<p class="c-text c-text--regular">Earn Money</p>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Affiliate</a>
				</li>
				<li class="c-footer__menu-link">
					<a href="#0" class="c-links">Become Partner</a>
				</li>
			</ul>
		</div>
	</div>
</footer>
