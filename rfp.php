<?php 
/*
Plugin Name: RFP - Quick and easy proposal request
Plugin URI: http://www.imagemotion.com
Description: Fill out our short template to let us know your influencer marketing needs in as much detail as possible. The more the better! This helps us help you in the most efficient and fastest way possible.
Version: 1.0
Author: Denis and Maxime
Author URI: http://imagemotion.com
License: http://imagemotion.com
*/

// include les functions
add_action('init','rfp_load_functions');

// importe le css et js pour user
add_action("wp_enqueue_scripts", "load_rfp_scripts_user");

function load_rfp_scripts_user() {

	wp_enqueue_style('rfp-style-user', plugin_dir_url( __FILE__ ).'css/rfp_style.css');

	wp_enqueue_script('rfp-main', plugin_dir_url( __FILE__ ).'js/rfp_main.js');
}

function rfp_load_functions(){

	include_once dirname(__FILE__) . "/rfp_templaite/rfp_functions.php";

	// shortcode
	add_shortcode('rfp', "fonction_rfp_shortcode" );
}

function fonction_rfp_shortcode() {
	include_once dirname(__FILE__) . "/rfp_templaite/rfp_index.php";
}