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


	function wp_professionalize_options_page() {

		if( !current_user_can( 'manage_options' )) {

			wp_die( 'You do not have sufficient permissions to access this page' );

		}

		echo '<p>Welcome to our plugin page!</p>';

	};
?>