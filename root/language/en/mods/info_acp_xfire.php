<?php
/**
*
* Xfire Mod [English]
*
* @author Prosk8er (Tyler) prosk8er@gotskillslounge.com
* @package Xfire Mod
* @version $Id: info_acp_xfire.php 105 2012-05-02 18:18:00Z Prosk8er $
* @copyright (c) 2011 Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'XFIRE_MOD'			=> 'Xfire Mod',
	'INSTALL_XFIRE_MOD'		=> 'Install Xfire Mod',
	'INSTALL_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to install the Xfire Mod?',
	'UPDATE_XFIRE_MOD'		=> 'Update Xfire Mod',
	'UPDATE_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to update the Xfire Mod?',
	'UNINSTALL_XFIRE_MOD'		=> 'Uninstall Xfire Mod',
	'UNINSTALL_XFIRE_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the Xfire Mod?',
));

?>