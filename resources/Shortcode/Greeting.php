<?php


use Vulcan\Shortcode\CreateShortcode;

class Greeting implements CreateShortcode {

	public static $shortcode = 'greeting';

	public static function register($atts = null) {
		return blade()->render('shortcodes.shortcode', ['name' => 'joe']);
	}
}