# HOI4Modding Localisation file repo
Repo for the localisation files on the hoi4modding website.

#### Languages which have dedicated translators
* English
* German

#### Want to help out by translating into your language?
Create a branch from this repo, copy the "en" folder and rename the new one to the new language's code, e.g. "de" for German, "fr" for French, etc.

#### Localisation file layout
The localisation file uses PHP associative arrays, meaning they use: key => value, within a an array, marked by []

These may be in a single array, e.g.

\[

'key1' => 'value',

'key2' => 'value2' 

]

Or they may be grouped into a specific group, e.g.

'group' => \[

	'key1' => 'value'
	
]

#### When updating a file
When updating a file, you only ever need to edit the value. They key should never be changed.

Values always need to be encapsulated in single quote marks, 'value', or double quote marks, "value".

If, when updating a value and you need to use the same character as the one used to encapsuled, prefix the character with a \ e.g. 'It\'s a value'
