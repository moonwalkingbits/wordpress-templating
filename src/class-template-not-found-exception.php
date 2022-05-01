<?php
/**
 * Templating: Template nof found exception class
 *
 * @package Moonwalking_Bits\Templating
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Templating;

use RuntimeException;

/**
 * An exception thrown when a template engine cannot find a given template file.
 *
 * @since 0.1.0
 */
class Template_Not_Found_Exception extends RuntimeException {

	/**
	 * Creates a new exception instance.
	 *
	 * @since 0.1.0
	 * @param string $template_name Name of the missing template file.
	 */
	public function __construct( string $template_name ) {
		parent::__construct( "Could not find template: {$template_name}" );
	}
}
