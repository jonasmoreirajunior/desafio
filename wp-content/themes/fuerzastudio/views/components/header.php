<?php
/**
 * Displays the header.
 *
 * @package Fuerza
 */

?>
<header class="c-header">
	<div class="container">
		<div class="c-header__body">
			<div class="c-header__logo">
				<?php fuerza_partial( 'logo' ); ?>
			</div>

			<div class="c-header__menu">
				<?php $composer->mainMenu(); ?>

				<div class="c-header__login">
					<button class="c-btn">
						Sign in
					</button>

					<button class="c-btn c-btn--primary-o">
						Sign Up
					</button>
				</div>
			</div>
		</div>
	</div>
</header>
