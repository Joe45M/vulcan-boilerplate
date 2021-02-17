<?php

use Jenssegers\Blade\Blade;
global $blade;

/**
 * Access blade instance.
 *
 * Some themes or other plugins actively use blade too. In order to avoid global Blade conflicts, we define our instance
 * outside of the global scope and return through a method - this isn't ideal, but it should get the job done nicely.
 *
 * @return Blade
 */
function blade() {
	global $blade;
	if(!$blade) {
		$blade = new Blade(get_config('path') . '/resources/views', get_config('path') . '/storage/view-cache');
	}

	return $blade;
}