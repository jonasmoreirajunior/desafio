<?php
/**
 * Front Page layout.
 *
 * Render a front page layout, without page header and footer.
 *
 * @link https://docs.wpemerge.com/#/framework/views/layouts
 * @package Fuerza
 */

\Fuerza::render( 'header' );
fuerza_component( 'header' );

\Fuerza::layoutContent();

\Fuerza::render( 'footer' );
fuerza_component( 'footer' );
