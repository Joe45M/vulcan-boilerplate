<?php


namespace Resource\Page;


class Data {
	public static $pageTitle = 'Data';

	public static $menuTitle = 'Data';

	public static $capabilities = 'manage_options';

	public static $menuSlug = 'data';

	public static $iconUrl = null;

	public static function register() {
		echo blade()->render('pages.data');
	}
}
