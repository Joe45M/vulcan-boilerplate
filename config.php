<?php

global $plugin_config;

$plugin_config = [
	'path' => plugin_dir_path(__FILE__),
];

function get_config($key) {
	global $plugin_config;
	return $plugin_config[$key];
}