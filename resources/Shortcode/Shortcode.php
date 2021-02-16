<?php


use Vulcan\Shortcode\CreateShortcode;

class Shortcode implements CreateShortcode {

	public static $shortcode = 'shortcode';

	public static function register($atts = null) {
		return blade()->render('shortcodes.shortcode', ['name' => 'joe']);
	}
}