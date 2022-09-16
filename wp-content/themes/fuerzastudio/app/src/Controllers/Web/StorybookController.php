<?php
namespace Fuerza\Controllers\Web;

use WPEmerge\Requests\RequestInterface;

/**
 * Handle the storybook route.
 */
class StorybookController {
	/**
	 * Template handler.
	 *
	 * @param  RequestInterface $request The request.
	 * @param  string           $view Not used view path.
	 * @param  string           $hierarchy Hierarchy story (components|blocks).
	 * @param  string           $slug Slug of component or block.
	 * @return ResponseInterface
	 */
	public function handle( RequestInterface $request, $view, $hierarchy, $slug ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
		$context   = $this->getContext( $request->query() );
		$component = 'views' . DIRECTORY_SEPARATOR . $hierarchy . DIRECTORY_SEPARATOR . $slug;

		return \Fuerza::view( 'storybook' )->with(
			[
				'component' => $component,
				'context'   => $context,
			]
		);
	}

	/**
	 * Get the $context from query url.
	 *
	 * @param mixed $query The request query.
	 * @return array
	 */
	public function getContext( $query ) {
		$args = array_map(
			function( $argument ) {
				/**
				 * Prevent error on trying decode a JSON response.
				 *
				 * @see https://stackoverflow.com/questions/24001410/php-json-decode-not-working.
				 */
				$arg             = stripslashes( html_entity_decode( $argument ) );
				$parsed_argument = json_decode( $arg, true );
				return $parsed_argument ?? $argument;
			},
			$query
		);

		return $args;
	}
}
