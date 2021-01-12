<?php

return [
	'menu' => [
		'edit' => 'Edit details',
		'add_to_mod' => 'Add to Team', //Add to mod team
	],
	'team' => [
		'title' => 'Add :member to team', //:member to be replaced with the username
		'content' => 'Which mod would you like to :member to?',
		'choose_mod' => 'Mod name',
		'role' => 'Role',
		'role_help' => 'An aesthetic name to show alongside this user on the mod\'s page on this website.',
		'submit' => 'Add to Team'
	],
	'team_member' => 'Team Member',
	'team_member_added' => 'Successfully added team member to mod.',
	'team_member_failed' => 'Failed to add team member to mod.',

	'edit_box' => [
		'title' => 'Edit your profile',
		'description' => 'Description',
		'description_help' => 'The description is a small bio which will display on your profile page',
		'language' => 'Language',
		'language_help' => 'Which language should the site display when you browse?',
		'links' => 'Links',
		'links_help' => 'Links to your social media platforms.',
		'avatar' => 'Avatar',
		'submit' => 'Update Profile',
		'social' => [
			'twitter' => 'Twitter',
			'twitch' => 'Twitch',
			'youtube' => 'YouTube',
			'discord' => 'Discord',
			'steam' => 'Steam'
		],
		'social_help' => [
			'twitter' => 'Your Twitter username, including the @ used to mention you on Twitter; e.g. @PdxInteractive',
			'twitch' => 'Your Twitch username; e.g. ParadoxInteractive',
			'youtube' => 'Link to your YouTube channel; e.g. https://youtube.com/user/Paradoxplaza',
			'discord' => 'Your Discord username, including the unique ID; e.g. Username#1234',
			'steam' => 'Your username on Steam, as people will search for you when searching by name in Steam.'
		],
		'colours' => 'Edit the default colours of the site, the default site colour appears on the left',
		'font_size' => 'Edit the font size of the site; unit is in pixels',
		'spacing' => 'Edit the spacing of elements on the site',
		'example_text' => 'Example',
		'spacing_text' => '1 spacing unit',
		'reset_default' => 'Check this box to reset all styles to default upon saving',
		'themes' => 'Themes',
		'theme_num' => 'Theme :num', // Theme 1, Theme 2, etc.
		'theme_default' => 'Default'
	],
	'profile_updated' => 'Profile successfully updated.',

	'tabs' => [
		'mods' => 'Mods',
		'forum_threads' => 'Forum Threads',
		'forum_posts' => 'Forum Posts'
	]
];