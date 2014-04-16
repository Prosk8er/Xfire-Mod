<?php
/**
*
* Xfire CPF [British English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'XFIRE'			=> 'XFire',
	'ADD_XFIRE_USER'	=> 'Add this user as an XFire Friend',
	'DOWNLOAD_XFIRE'	=> 'Download the XFire Program',
	'XFIRE_STYLE'           => 'XFire Style',
	'XFIRE_STYLE_EXPLAIN'   => 'Choose a style to have for the mini profile',
	'XFIRE_SHADOW'          => 'Shadow',
	'XFIRE_COMBAT'          => 'Combat',
	'XFIRE_SCIFI'           => 'Sci-Fi',
	'XFIRE_FANTASY'         => 'Fantasy',
	'XFIRE_WOW'             => 'World Of Warcraft',
	'XFIRE_DEFAULT'         => 'Default',
));
