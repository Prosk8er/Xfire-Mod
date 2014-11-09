<?php
/**
*
* XFire CPF extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Prosk8er <http://www.gotskillslounge.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace prosk8er\xfirecpf\migrations\v11x;

class profilefield_xfire extends \phpbb\db\migration\profilefield_base_migration
{
	static public function depends_on()
	{
		return array(
			'\prosk8er\xfirecpf\migrations\v11x\release_1_1_0',
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'create_custom_field'))),
		);
	}

	protected $profilefield_name = 'phpbb_xfire';

	protected $profilefield_database_type = array('VCHAR', '');

	protected $profilefield_data = array(
		'field_name'			=> 'phpbb_xfire',
		'field_type'			=> 'profilefields.type.string',
		'field_ident'			=> 'phpbb_xfire',
		'field_length'			=> '40',
		'field_minlen'			=> '5',
		'field_maxlen'			=> '255',
		'field_novalue'			=> '',
		'field_default_value'	=> '',
		'field_validation'		=> '.*',
		'field_required'		=> 0,
		'field_show_novalue'	=> 0,
		'field_show_on_reg'		=> 0,
		'field_show_on_pm'		=> 1,
		'field_show_on_vt'		=> 1,
		'field_show_on_ml'		=> 0,
		'field_show_profile'	=> 1,
		'field_hide'			=> 0,
		'field_no_view'			=> 0,
		'field_active'			=> 1,
		'field_is_contact'		=> 1,
		'field_contact_desc'	=> '',
		'field_contact_url'		=> '',
	);

	protected $user_column_name = 'user_xfire';
}
