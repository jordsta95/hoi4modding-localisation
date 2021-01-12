<?php

return [
	//Custom GFX modal
	'choose_gfx' => 'Choose GFX',
	'custom_gfx' => 'Custom GFX',
	'default_gfx' => 'Default GFX',
	'search_gfx' => 'Search GFX',
	'upload_custom_gfx' => 'Choose New Custom GFX',
	'submit_gfx' => 'Upload GFX',

	//Confirm Delete
	'delete_title' => 'Are you sure you want to delete this?',
	'delete_text' => 'Once deleted the data is no longer able to be recovered.', 
	'delete_confirm' => 'Yes, delete!',
	'delete_cancel' => 'Cancel',

	//Import
	'import_title' => 'Import',
	'import_instruction' => 'Add files stated below, and press the "Import Now" button below to import the files to your mod.',
	'import_now' => 'Import Now',
	'import_focus' => [
		'focus_tree' => 'Focus Tree File',
		'focus_tree_help' => 'For a base-game focus tree, you can find the focus tree in: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\common\national_focus</small> based on default install location for Steam',
		'localisation' => 'Localisation File',
		'localisation_help' => 'For a base-game focus tree, you can find the localisation file in: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\localisation</small>. The file will be focus_l_[language of the mod].yml, for a non-DLC focus tree, or prefixed with the DLC for a DLC tree, e.g. lar_focus_l_english.yml for a La Resistance focus tree, in English.'
	],

	//Builder
	'builder_title' => 'Builder',
	'builder_description' => 'Press the "+" button to add a new item to the output. If the item added is a scope, and is still incomplete a new "+" button will appear inside. Once you have finished building your output, press the "Submit" button.',
	'builder_submit' => 'Submit',
	'builder_cancel' => 'Cancel',
	'builder_search' => 'Search outcomes',

	//Bug Report
	'bug_report' => [
		'title' => 'Report a bug',
		'page_info' => 'Page info',
		'additional_files' => 'Additional files',
		'bug_title' => 'Short description of the bug',
		'bug_description' => 'Long description of the bug',
		'report_bug' => 'Report Bug',
		'close' => [
			'title' => 'Cancel bug report',
			'description' => 'Discard text and cancel making bug report',
			'confirm' => 'Confirm',
			'cancel' => "I'm not done!"
		]
	],


	//Country import

	'import_country' => [
		'history' => 'Country History File',
		'history_help' => 'For a base-game country, you can find the file at: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\history\countries</small> based on default install location for Steam',
		'localisation' => 'Localisation File',
		'localisation_help' => 'For a base-game country, you can find the localisation file in: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\localisation</small>. The file will be countries_l_[language of the mod].yml, e.g. for an English mod countries_l_english.yml',
		'units' => 'Units Files',
		'units_help' => 'All unit files, including "Naval" & "Naval_Legacy", for your country. For base game nation: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\history\units</small>.',
		'common' => 'Country Common File',
		'common_help' => 'For a base-game country, you can find the file at: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\common\countries</small> based on default install location for Steam',
		'names' => 'Names File',
		'names_help' => 'For a base-game country, you can find the file at: <small>C:\Program Files (x86)\Steam\steamapps\common\Hearts of Iron IV\common\names</small> based on default install location for Steam',
	],
];