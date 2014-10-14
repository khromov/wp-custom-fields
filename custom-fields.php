<?php
/*
Plugin Name: Custom Fields
Plugin URI:
Description: Provides additional fields
Version: 2014.10.15
Author: khromov
Author URI: http://profiles.wordpress.org/khromov/
License: GPL2
*/

add_action('plugins_loaded', function()
{
	/* If development mode is not defined in config, load our CPT:s because we assume it's a regular user installing this on a clean site */
	if(!defined('CUSTOM_CPT_DEVELOPMENT_MODE') || (defined('CUSTOM_CPT_DEVELOPMENT_MODE') && (CUSTOM_CPT_DEVELOPMENT_MODE !== true)))
	{
		foreach (glob(__DIR__ . "/field_groups/*.php") as $filename)
			include $filename;
	}
});