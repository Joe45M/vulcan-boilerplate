<?php

use Jenssegers\Blade\Blade;
global $blade;

$blade = new Blade(get_config('path') . '/resources/views', get_config('path') . '/storage/view-cache');

/**
 * Access blade instance.
 * @return Blade
 */
function blade() {
	global $blade;
	return $blade;
}