<?php
/**
 * Blank layout.
 *
 * Render a blank layout, without page header and footer.
 *
 * @link https://docs.wpemerge.com/#/framework/views/layouts
 * @package Fuerza
 */

\Fuerza::render( 'header' );

\Fuerza::layoutContent();

\Fuerza::render( 'footer' );
