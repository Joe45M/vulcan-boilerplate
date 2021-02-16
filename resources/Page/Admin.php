<?php


namespace Resource\Page;


class Admin {
	public static $pageTitle = 'Admin';

	public static $menuTitle = 'Admin';

	public static $capabilities = 'manage_options';

	public static $menuSlug = 'admin';

	public static $iconUrl = null;

	public static function register() {
		echo blade()->render('pages.admin');
	}
}
