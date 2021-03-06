<?php
return [
	'focus_tree_created' => 'Schwerpunktbaum erfolgreich erstellt',
	'focus_tree_deleted' => 'Schwerpunktbaum erfolgreich gelöscht',
	'focus_tree_updated' => 'Schwerpunktbaum erfolgreich aktualisiert',
	'no_focus_tree' => 'Es ist noch kein Schwerpunktbaum für diesen Mod erstellt worden',
	'no_mods' => 'Du musst zuerst einen Mod erstellen. Dies kannst du <a href="/mod">hier</a> tun.',
	'create_modal' => [
		'title' => 'Erstelle einen neuen Schwerpunkt',
		'country' => 'Länder \'Tag\'',
		'country_help' => 'Für welches Land erstellst du diesen Schwerpunktbaum? Benutze entweder die Dropdown-Optionen oder tippe das \'Tag\' für deine eigene Nation ein',
		'name' => 'Name',
		'name_help' => 'Dieser Name wird benutzt um deinen Schwerpunktbaum auf dieser Seite zu identifizieren. Dieser Name beeinflusst das Spiel nicht.',
		'tree_id' => 'Baum ID',
		'tree_id_help' => "Die Baum ID ist die interne ID des Spiels für den Schwerpunktbaum. Diese muss einzigartig für alle Schwerpunkte im Spiel und in allen geladenen Mods sein. Die ID kann keine Leerzeichen/Nummern/Umlaute/scharfes S enthalten. Lass die Textbox leer für eine automatisch-generierte ID basierend auf dem Namen des Schwerpunktbaums.",
		'lang' => 'Sprache',
		'lang_help' => 'In welches Sprache sollen die Dateien für den Schwerpunktbaum exportiert werden?',
		'submit' => 'Erstelle einen Schwerpunktbaum',
		'mod' => 'Mod',
		'mod_help' => 'Wähle welchem Mod der Schwerpunktbaum zugewiesen werden soll.'
	],
	
	'create_focus' => [
		'title' => 'Erstelle einen Schwerpunkt',
		'description' => 'Um einen neuen Schwerpunkt für deinen Schwerpunktbaum zu erstellen kannst du auf diese Taste klicken und beginnen eine Entwicklung für ein Land deiner Wahl zu entscheiden.'
	],
	'delete_focus' => [
		'title' => 'Lösche einen Schwerpunkt',
		'description' => 'Nachdem du diese Taste gedrückt hast wirst du den "Löschen Modus" aktivieren. Wenn du in diesem Modus bist werden dich alle Schwerpunkte die du anklickst fragen, ob du sie löschen möchtest. Wenn du diese Taste noch einmal drückst, verlässt du den Löschen Modus.'
	],
	'import_focus' => [
		'title' => 'Importiere einen Schwerpunkt',
		'description' => 'Wenn du einen bereits existierenden Schwerpunktbaum hast und einen Mod importieren willst, so dass du ihn wie du willst bearbeiten kannst, drücke diese Taste und liefere die Schwerpunktbaum Dateien die du importieren willst.'
	],
	'create_title' => 'Erstelle den Schwerpunkt',
	'edit_title' => 'Bearbeite den Schwerpunkt',
	'name' => 'Name',
	'name_help' => 'Der Name ist der Titel des Schwerpunktbaumes und wird auch benutzt werden, um eine Schwerpunkt ID beim exportieren zu generieren.',
	'description' => 'Beschreibung',
	'description_help' => 'Die Beschreibung ist ein kleiner Text, welcher beschreibt was der Schwerpunkt macht oder warum ein Land diesen Schwerpunkt haben sollte.',
	'x' => 'X',
	'x_help' => 'Dieses Feld bestimmt wo auf der X-Achse (horizontal) der Schwerpunkt sein wird.',
	'y' => 'Y',
	'y_help' => 'Dieses Feld bestimmt wo auf der Y-Achse (vertikal) der Schwerpunkt sein wird.',
	'ttc' => 'Zeit zur Vervollständigung',
	'ttc_help' => 'Dieses Feld bestimmt wie lange es dauern sollte deinen Schwerpunkt abzuschließen.',
	'ttc_select' => [
		'1' => '1 Woche',
		'2' => '2 Wochen',
		'3' => '3 Wochen',
		'4' => '4 Wochen',
		'5' => '5 Wochen',
		'6' => '6 Wochen',
		'7' => '7 Wochen',
		'8' => '8 Wochen',
		'9' => '9 Wochen',
		'10' => '10 Wochen',
		'11' => '11 Wochen',
		'12' => '12 Wochen',
		'13' => '13 Wochen',
		'14' => '14 Wochen',
		'15' => '15 Wochen',
		'16' => '16 Wochen',
		'17' => '17 Wochen',
		'18' => '18 Wochen',
		'19' => '19 Wochen',
		'20' => '20 Wochen',
	],
	'prerequisite' => 'Voraussetzungen',
	'prerequisite_help' => 'Dieses Feld bestimmt welche(n) Schwerpunkt(e) du abschließen musst bevor dieser Schwerpunkt gestartet werden kann.',
	'mutually_exclusive' => 'Gegenseitig Ausschließend',
	'mutually_exclusive_help' => 'Dieses Feld bestimmt welche(r) Schwerpunkt(e) nicht abgeschlossen werden können, wenn du diesen Schwerpunkt abschließt.',
	'available' => 'Verfügbar',
	'available_help' => 'Dieses Feld bestimmt ob bestimmte Voraussetzungen, außerhalb des Schwerpunktbaumes, erreicht werden. zB.: Ein Land existiert.',
	'ai_will_do' => 'KI \'will do\' Faktor',
	'ai_will_do_help' => 'Dieses Feld bestimmt wie wahrscheinlich es für die KI ist, diesen Schwerpunkt auszuwählen, wenn er verfügbar ist. Höhere Zahlen steigern die Wahrscheinlichkeit.',
	'bypass' => 'Bypass',
	'bypass_help' => 'Dieses Feld bestimmt ob der Schwerpunkt automatisch vervollständigt werden soll, wenn er verfügbar ist. zB.: Überspringe den Schwerpunkt wenn eine Nation nicht mehr existiert.',
	'search_filters' => 'Suchfilter',
	'search_filters_help' => 'Dieses Feld fügt diesen Schwerpunkt einer gefilterten Liste, die du aussuchst, hinzu. Dies erlaubt anderen Usern zu sehen welche Art von Schwerpunkt dies ist.',
	'searchFilters' => [
		'FOCUS_FILTER_POLITICAL' => 'Politik',
		'FOCUS_FILTER_RESEARCH' => 'Forschung',
		'FOCUS_FILTER_INDUSTRY' => 'Industrie',
		'FOCUS_FILTER_STABILITY' => 'Stabilität',
		'FOCUS_FILTER_WAR_SUPPORT' => 'Kriegsunterstützung',
		'FOCUS_FILTER_MANPOWER' => 'Mannstärke',
		'FOCUS_FILTER_FRA_POLITICAL_VIOLENCE' => 'Politische Gewalt',
		'FOCUS_FILTER_FRA_OCCUPATION_COST' => 'Besatzungskosten',
		'FOCUS_FILTER_ANNEXATION' => 'Gebietsexpansion',
		'FOCUS_FILTER_CHI_INFLATION' => 'Inflation',
		'FOCUS_FILTER_USA_CONGRESS' => 'Kongress',
		'FOCUS_FILTER_TFV_AUTONOMY' => 'Autonomie',
		'FOCUS_FILTER_MEX_CHURCH_AUTHORITY' => 'Kirchenautorität',
		'FOCUS_FILTER_MEX_CAUDILLO_REBELLION' => 'Caudillo Rebellion',
		'FOCUS_FILTER_SPA_CIVIL_WAR' => 'Spanischer Bürgerkrieg',
		'FOCUS_FILTER_SPA_CARLIST_UPRISING' => 'Carlistischer Aufstand'
	],
	'completion_reward' => 'Belohnung',
	'completion_reward_help' => 'Dieses Feld bestimmt was passiert wenn der Schwerpunkt abgeschlossen wird. zB.: Erhalte Politische Macht, füge Stabilität hinzu, etc.',
	'allow_branch' => 'Zweig zulassen',
	'allow_branch_help' => 'Die Schwerpunkt ID(s) welche abgeschlossen werden müssen bevor dieser, und jeder folgende, Schwerpunkt in deinem Schwerpunktbaum sichtbar werden.',
	'select_effect' => 'Effekt wählen',
	'select_effect_help' => 'Effekte die passieren sollten solbald der Schwerpunkt gestartet wird. Wenn dieses Feld nicht leer ist, kann der Schwerpunkt nicht abgebrochen werden.',
	'will_lead_to_war_with' => 'Wird zu Krieg führen',
	'will_lead_to_war_with_help' => 'Wird roten Text zum Schwerpunkt hinzufügen, welcher erklärt, dass es zum Krieg mit einer anderen Nation kommt. Die Zielnation wird informiert, dass der Schwerpunkt gestartet wurde.',
	/*
	'' => '',
	'_help' => '',
	*/
	'relations' => [
		'title' => 'Beziehungen des Schwerpunkts',
		'description' => 'Benutze den unteren Abschnitt dazu eine Beziehung zwischen diesem Schwerpunkt und vielen anderen zu erstellen. Alle Schwerpunkte in der selben Box werden gegen einander geprüft. Alle Schwerpunkte in einer anderen Box werden gegen einander und gegen Schwerpunkte in jeder anderen Box geprüft.',
		'update' => 'Beziehungen aktualisieren',
		'add_focus' => 'Zur Liste hinzufügen'
	]
];