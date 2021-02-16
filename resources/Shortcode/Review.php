<?php


use Vulcan\Shortcode\CreateShortcode;

class Review implements CreateShortcode {

	public static $shortcode = 'review';

	public static function register($atts = null) {
		return blade()->render('shortcodes.shortcode', ['name' => 'joe']);
	}
}