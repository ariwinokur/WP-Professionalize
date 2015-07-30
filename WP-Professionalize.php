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

	add_filter('gettext', 'change_howdy', 10, 3);

	function change_howdy($translated, $text, $domain) {

	    if (!is_admin() || 'default' != $domain)
	        return $translated;

	    if (false !== strpos($translated, 'Howdy'))
	        return str_replace('Howdy', 'Welcome', $translated);

	    return $translated;
	}

?>