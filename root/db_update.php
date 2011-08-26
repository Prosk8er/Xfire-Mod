<?php
/**
*
* @copyright (c) 2009 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Instructions: You must be logged in as an administrator to use this file.
* Copy this file to your phpBB root directory, then access it from your browser.
* Make sure to delete this file when the update is complete.
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('common');
if (!$auth->acl_get('a_'))
{
	trigger_error($user->lang['NOT_AUTHORISED']);
}
$message = '';
$error = false;
$sql_array = array();
$db->sql_return_on_error(true);
$db_tools = new phpbb_db_tools($db);
$db_tools->return_statements = true;

// SQL Statements
//---------------------------------------------------------------------------//
$sql_array[] = 'ALTER TABLE ' . USERS_TABLE . " ADD user_xfire varchar( 255 ) NOT NULL DEFAULT ''";
$sql_array[] = 'ALTER TABLE ' . USERS_TABLE . " ADD user_xfire_style tinyint( 1 ) NOT NULL DEFAULT '6'";
//---------------------------------------------------------------------------//

// Language strings
$user->add_lang('install');
$user->lang['SQL_STATEMENT_SQL']     = $user->lang['SQL'];
$user->lang['SQL_STATEMENT_SUCCESS'] = $user->lang['DONE'];
$user->lang['SQL_STATEMENT_FAILURE'] = $user->lang['ERROR'];
$user->lang['SQL_RESULT_SUCCESS']	 = $user->lang['UPDATE_DB_SUCCESS'];
$user->lang['SQL_RESULT_FAILURE']	 = $user->lang['SOME_QUERIES_FAILED'];

// Begin executing SQL statements
foreach ($sql_array as $sql_query)
{
	$result = $db->sql_query($sql_query);
	$message .= '<span style="display:block;background-color:#FAFAFA;color:#333;font-family:\'Courier New\',monospace;padding-left:4px;padding-right:4px;"><span style="font-weight:bold;">' . $user->lang['SQL_STATEMENT_SQL'] . ': </span>' . $sql_query . '</span>';
	if ($result)
	{
		$message .= '<span style="color:green;font-weight:bold;">' . $user->lang['SQL_STATEMENT_SUCCESS'] . '!</span>';
	}
	else
	{
		$error = true;
		$db_error = $db->sql_error();
		$message .= '<span style="color:red;"><span style="font-weight:bold;">' . $user->lang['SQL_STATEMENT_FAILURE'] . ': </span>' . $db_error['message'] . '</span>';
	}
	$message .= '<br /><br />';
}

// Final result
if($error == true)
{
	$message = '<span style="color:red;">' . $user->lang['SQL_RESULT_FAILURE'] . '</span><br /><br />' . $message;
}
else
{
	$message .= '<span style="color:green;">' . $user->lang['SQL_RESULT_SUCCESS'] . '</span>';
}
trigger_error($message);

?>