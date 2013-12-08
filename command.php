<?php
/**
 * wp-cli boilerplate
 *
 * @version 0.0.1
 * @author Paolo Tresso <plugins@swergroup.com>
 */

if ( true === class_exists( 'WP_CLI_Command' ) ){
	/**
	 * Do something.
	 */
	class WP_CLI_Boilerplate_Command extends WP_CLI_Command{
		
		private $version = '0.1.3';
		
		/**
		 * Do something.
		 * 
		 * ## OPTIONS
		 *
		 * [--flags=<flags>]
		 * : additional commandline flags
		 *
		 * ## EXAMPLES
		 *
		 * wp boilerplate
		 *
		 * @since 0.0.1
		 * @when before_wp_load
		 * @synopsis [--flags=<flags>]
		 */
		public function __invoke( $args = null, $assoc_args = null ){
			print_r( $args );
			print_r( $assoc_args );
		}
		
		/**
		 * Return command version
		 *
		 * @since 0.0.1
		 * @when before_wp_load
		 */
		public function version(){
			WP_CLI::line( 'wp-cli boilerplate command ' . $this->version );
		}

	}

	WP_CLI::add_command( 'boilerplate', 'WP_CLI_Boilerplate_Command' );
}