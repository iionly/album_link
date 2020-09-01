<?php

namespace AlbumLink;

class AlbumLinkBootstrap extends \Elgg\DefaultPluginBootstrap {

	public function init() {
		elgg_register_plugin_hook_handler('register', 'menu:user_hover', '\AlbumLink\AlbumLinkHooks::album_link_hover_menu');
	}
}
