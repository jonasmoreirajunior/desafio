<?php
/**
 * Web Routes.
 *
 * @link https://docs.wpemerge.com/#/framework/routing/methods
 *
 * @package Fuerza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Using our ExampleController to handle the homepage, for example.
// phpcs:ignore
// \Fuerza::route()->get()->url( '/' )->handle( 'ExampleController@home' );

// If we do not want to hardcode a url, we can use one of the available route conditions instead.
// phpcs:ignore
// \Fuerza::route()->get()->where( 'post_id', get_option( 'page_on_front' ) )->handle( 'ExampleController@home' );

\Fuerza::route()->get()
	->url( '/storybook/{hierarchy}/{slug?}' )
	->query(
		function( $query_vars, $hierarchy, $slug ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
			return [
				'hierarchy' => $hierarchy,
				'slug'      => $slug,
			];
		}
	)
	->handle( 'StorybookController@handle' );

/**
 * Pass all front-end requests through WPEmerge.
 * WARNING: Do not add routes after this - they will be ignored.
 *
 * @link https://docs.wpemerge.com/#/framework/routing/methods?id=handling-all-requests
 */
\Fuerza::route()->all();
