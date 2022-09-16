<?php
namespace Fuerza\Controllers;

use Pimple\Container;
use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Provide controller dependencies
 *
 * @codeCoverageIgnore
 */
class ControllersServiceProvider implements ServiceProviderInterface {

	/**
	 * Register function
	 *
	 * @param \Pimple\Container $container container to register.
	 * @return void
	 */
	public function register( $container ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter

	}

	/**
	 * Class bootstrap
	 *
	 * @param \Pimple\Container $container container to register.
	 * @return void
	 */
	public function bootstrap( $container ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
		// Nothing to bootstrap.
	}
}
