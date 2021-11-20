<?php
/**
 * Templating: Template engine interface
 *
 * @package Moonwalking_Bits\Templating
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Templating;

/**
 * Represents a template engine.
 *
 * @since 0.1.0
 */
interface Template_Engine_Interface {

	/**
	 * Adds the given list of directories to be searched for templates.
	 *
	 * @since 0.1.0
	 * @param string[] $directories Directories to add to search path.
	 */
	public function add_template_directories( array $directories ): void;

	/**
	 * Renders a matching template in the given context.
	 *
	 * @since 0.1.0
	 * @param string $template_name Name of the template to render.
	 * @param array  $context Context to render the template in.
	 * @return string Rendered template result.
	 * @throws \Moonwalking_Bits\Templating\Template_Not_Found_Exception When the given template cannot be found.
	 */
	public function render( string $template_name, array $context = array() ): string;
}
