<?php

return [
	'hooks' => [
		'register' => [
			'menu:user_hover' => [
				'\AlbumLink\AlbumLinkHooks::album_link_hover_menu' => [],
			],
		],
	],
];
