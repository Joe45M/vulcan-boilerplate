<?php

namespace Resource\Shortcode;

use Vulcan\Shortcode\CreateShortcode;

class MessageShortcode implements CreateShortcode {

	public static $shortcode = 'greeting';

	public static function register($atts = null) {
		return blade()->render('shortcodes.shortcode', ['name' => 'joe']);
	}
}