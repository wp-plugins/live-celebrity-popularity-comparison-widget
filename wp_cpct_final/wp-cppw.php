<?php
/*
Plugin Name: Live Celebrity Popularity Comparison Trend Widget
Version: 1.0
Description: Add fun and interest to your sidebar by installing this Celebrity popularity graph creator. You add 2 celebrities' names and a dynamically created graph compares the celebrities' popularity with live trend data from Google.The image is compiled by Google and this gadget author has no control over what is displayed nor the accuracy of it.
Author: Director of Personal Money Store: David Johnston
Author URI: http://wordpress.org/support/profile/personalmoneystore/
Plugin URI: http://personalmoneystore.com/moneyblog/financial-gadgets-and-widgetslive-celebrity/
  /*
   Copyright 2010  Director of Personal Money Store: David Johnston  (email : webmaster@personalmoneystore.com)
   The image is compiled by Google and this gadget author has no control over what is displayed or the accuracy of it.
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

   */

global $wp_version;

	$exit_msg = 'WP Celebrity Popularity  Comparison Widget requires WordPress 2.6 or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';

	if (version_compare($wp_version, "2.6", "<")) {
      exit($exit_msg);
	}
$wp_cppw_plugin_url =  trailingslashit( WP_PLUGIN_URL.'/'. dirname( plugin_basename(__FILE__) ));

function WPPcpw_WidgetControl()
{
	// get saved options
	$options = get_option('wp_cppw');
	// handle user input
	if ($_POST["submit_cppw"]) {
	// retireve ppw title from the request

		$options['title_cppw'] = strip_tags(stripslashes($_POST["title_cppw"]));
        	$options['first_name_cppw'] = strip_tags(stripslashes($_POST["first_name_cppw"]));
		$options['second_name_cppw'] = strip_tags(stripslashes($_POST["second_name_cppw"]));
		$options['enable_checkbox_cppw'] = strip_tags(stripslashes($_POST["enable_checkbox_cppw"]));
 		// update the options to database
        update_option('wp_cppw', $options);

	}
	$title_cppw = $options['title_cppw'];
	$first_name_cppw = $options['first_name_cppw'];
	$second_name_cppw = $options['second_name_cppw'];
	$enable_checkbox_cppw = $options['enable_checkbox_cppw'];
	// print out the widget control, links to widget control    
	include('wp-cppw-widget-control.php');


}  
function WPPcpw_Widget($args = array())
{      
	// extract the parameters
	extract($args);
	// get our options
	$options = get_option('wp_cppw');
	$title_cppw = $options['title_cppw'];
	$first_name_cppw = $options['first_name_cppw'];
	$second_name_cppw = $options['second_name_cppw'];
	$enable_checkbox_cppw = $options['enable_checkbox_cppw'];
	// print the theme compatibility code
	echo $before_widget;
	echo $before_title . $title_cppw. $after_title;
	// include our widget
	include('wp-cppw-widget.php');
	echo $after_widget;

}

//loads from the start
function WPPcpw_Init()
{
	// register widget
	register_sidebar_widget('WP  Celebrity Popularity Comparison Widget', 'WPPcpw_Widget');
	// register widget control
	register_widget_control('WP  Celebrity Popularity Comparison Widget', 'WPPcpw_WidgetControl');
}
add_action('init', 'WPPcpw_Init');
//links to css
add_action('wp_head', 'WPPcpw_HeadAction');
function WPPcpw_HeadAction()
{
	global $wp_cppw_plugin_url;
    echo '<link rel="stylesheet" href="' . $wp_cppw_plugin_url . '/wp-cppw.css" type="text/css" />';
}
//links to javascript
add_action('wp_print_scripts', 'WPPcpw_ScriptsAction');
function WPPcpw_ScriptsAction()
{
	if (!is_admin()) {
	global $wp_cppw_plugin_url;
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-form');
	wp_enqueue_script('wp_cppw_script', $wp_cppw_plugin_url . '/wp-cppw.js', array('jquery', 'jquery-form'));
	}

}?>