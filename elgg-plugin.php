<?php

return [
	'plugin' => [
		'name' => 'Album Link',
		'version' => '4.0.1',
		'dependencies' => [
			'tidypics' => [],
		],
	],
	'hooks' => [
		'register' => [
			'menu:user_hover' => [
				'\AlbumLink\AlbumLinkHooks::album_link_hover_menu' => [],
			],
		],
	],
];
