<?php

namespace Resource\Cpt;

use Vulcan\Cpt\CreatePostType;

class Movie implements CreatePostType {
	public static function register() {

		$labels = array(
			'name' => 'Movie!',
		);

		$args   = array(
			'label'               => '',
			'description'         => '',
			'labels'              => $labels,
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		);

		// Registering your Custom Post Type
		register_post_type( 'movie', $args );
	}
}

