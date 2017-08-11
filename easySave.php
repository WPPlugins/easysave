<?php
/*
Plugin Name: EasySave
Plugin URI: http://nefario.cz/EasySave	
Description: Simple plug-in which enables saving post using shortcuts (Ctrl-S or Cmd-S)
Version: 0.1
Author: Nefario
Author URI: http://nefario.cz
License: GNU GPLv3
*/


// Disable direct loading
defined('ABSPATH') or die("Cannot access this page directly.");   


// load scrip to administration
function easySave_js(){
	wp_enqueue_script('easySave', plugin_dir_url( __FILE__ ).'easySave.js', array('jquery'));
}
add_action( 'admin_enqueue_scripts', 'easySave_js' );
