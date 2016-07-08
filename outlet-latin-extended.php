<?php

/*
Plugin Name: Outlet Latin Extended
Plugin URI: http://webikon.sk/
Description: Load latin extended fonts for Outlet (Storefront child theme)
Version: 0.1
Author: Webikon (Juraj Kiss)
Author URI: http://webikon.sk/
*/

add_action( 'wp_enqueue_scripts', 'platobnebrany_latin_extended', 30 );
function platobnebrany_latin_extended() {
	wp_deregister_style( 'roboto' );
	wp_deregister_style( 'montserrat' );

	wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic,500,500italic&subset=latin-ext', array( 'storefront-child-style' ) );
	wp_enqueue_style( 'montserrat', plugins_url( 'montserrat.css', __FILE__ ) );
}
/**
 * Copyright (c) 2016 . All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */
