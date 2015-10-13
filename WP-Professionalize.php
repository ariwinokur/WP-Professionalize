<?php
	/* Block direct access to PHP file */
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	/*
	Plugin Name: WP Professionalize
	Plugin URI:  http://ariwinokur.com/wp-professionalize
	Description: Clean up WordPress for a more professional look when giving to clients
	Version:     Alpha
	Author:      Ari Winokur
	Author URI:  http://ariwinokur.com
	License:     GPL2
	License URI: https://www.gnu.org/licenses/gpl-2.0.html
	
	WP Professionalize is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 2 of the License, or
	any later version.
	 
	WP Professionalize is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.
	 
	You should have received a copy of the GNU General Public License
	along with WP Professionalize. If not, see https://www.gnu.org/licenses/gpl-2.0.html
	*/

	/*
	Create Global Variables
	*/

	$options = array();

	function wp_professionalize_enqueue_scripts() {

		wp_enqueue_script( 'HowdyText', plugin_dir_url( __FILE__ ) . 'js/HowdyText.js');

	}


	/*
	Create settings page in Admin menu under Settings
	*/

	function wp_professionalize_menu() {

		add_options_page(
			'WP Professionalize Settings Page',
			'WP Professionalize',
			'manage_options',
			'wp-professionalize',
			'wp_professionalize_options_page'
			);

	}

	add_action( 'admin_menu', 'wp_professionalize_menu' );
	add_action( 'admin_head', 'wp_professionalize_enqueue_scripts' );

	function wp_professionalize_options_page() {

		if( !current_user_can( 'manage_options' )) {

			wp_die( 'You do not have sufficient permissions to access this page' );

		}

		//require ( 'inc/functions.php' );

		global $options;

		if( isset( $_POST['wp_professionalize_settings_form_submitted'] ) ) {

			$hidden_field = esc_html( $_POST['wp_professionalize_settings_form_submitted'] );

			$replace_howdy_with = esc_html( $_POST['replaceWith'] );

			$howdy = esc_html( $_POST['howdy'] );

			if( $hidden_field == 'Y' ) {

				esc_attr_e( 'Form Submitted', 'wp_admin_style' );

				esc_attr_e( $replace_howdy_with, 'wp_admin_style' );

				esc_attr_e( $howdy, 'wp_admin_style' );

				if ($howdy == 'replace') {

					$options['replace_howdy_with']	=	$replace_howdy_with;

				} elseif:



				$options['howdy']	=	$howdy;

				update_option( 'wp_professionalize', $options );











				}

				
			}

		}

		require ( 'inc/options-page-wrapper.php' );
	};




?>