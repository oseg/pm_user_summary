<?php

$tabs = [[
	'text' => elgg_echo('admin:appearance:profile_fields'),
	'href' => 'admin/appearance/profile_fields',
	'selected' => elgg_extract('profile_fields_selected', $vars, false),
]];

if (elgg_get_plugin_setting("user_summary_control", "profile_manager") == "yes") {
	$tabs[] = [
		'text' => elgg_echo('admin:appearance:user_summary_control'),
		'href' => 'admin/appearance/user_summary_control',
		'selected' => elgg_extract("user_summary_control_selected", $vars, false),
	];
}

if (elgg_is_active_plugin('groups')) {
	$tabs[] = [
		'text' => elgg_echo('admin:appearance:group_fields'),
		'href' => 'admin/appearance/group_fields',
		'selected' => elgg_extract('group_fields_selected', $vars, false),
	];
}
		
$tabs[] = [
	'text' => elgg_echo('settings'),
	'href' => 'admin/plugin_settings/profile_manager',
	'selected' => elgg_extract('settings_selected', $vars, false),
];

echo elgg_view('navigation/tabs', ['tabs' => $tabs]);
