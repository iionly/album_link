<?php

elgg_register_event_handler('init', 'system', 'album_link_init');

function album_link_init() {

    // Extend avatar hover menu
    elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'album_link_hover_menu');

}

function album_link_hover_menu($hook, $type, $return, $params) {

    $user = $params['entity'];

    $url = elgg_get_site_url() . "photos/owner/" . $user->username;
    $item = new ElggMenuItem('album_link_hover', elgg_echo("album_link:album_link", array($user->name)), $url);
    $item->setSection('action');
    $return[] = $item;

    return $return;
}