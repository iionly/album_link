<?php

namespace AlbumLink;

class AlbumLinkHooks {

	function album_link_hover_menu(\Elgg\Hook $hook) {
		$user = $hook->getParam('entity');
		$menu = $hook->getValue();

		if ($user instanceof \ElggUser) {
			$menu_options = [
				'name' => 'album_link_hover',
				'text' => elgg_echo('album_link:album_link'),
				'icon' => 'file-image-o',
				'href' => elgg_get_site_url() . "photos/owner/" . $user->username,
			];
			$menu[] = \ElggMenuItem::factory($menu_options);
		}

		return $menu;
	}
}
