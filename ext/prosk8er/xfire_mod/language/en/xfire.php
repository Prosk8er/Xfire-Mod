<?php

/**
*
* Xfire Mod [British English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'XFIRE'			=> 'XFire',
	'XFIRE_EXPLAIN'		=> 'Please visit the %sFAQ%s to learn more.',
	'TOO_LONG_XFIRE'	=> 'The XFire name you entered is too long.',
	'TOO_SHORT_XFIRE'	=> 'The XFire name you entered is too short.',
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

	'XFIRE_MOD'			=> 'Xfire Mod',
	'INSTALL_XFIRE_MOD'		=> 'Install Xfire Mod',
	'INSTALL_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to install the Xfire Mod?',
	'UPDATE_XFIRE_MOD'		=> 'Update Xfire Mod',
	'UPDATE_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to update the Xfire Mod?',
	'UNINSTALL_XFIRE_MOD'		=> 'Uninstall Xfire Mod',
	'UNINSTALL_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the Xfire Mod?',
));