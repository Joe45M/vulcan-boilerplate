<?php


use Vulcan\Shortcode\CreateShortcode;

class Content implements CreateShortcode {

	public static $shortcode = 'content';

	public static function register($atts = null) {
		return blade()->render('shortcodes.shortcode', ['name' => 'joe']);
	}
}