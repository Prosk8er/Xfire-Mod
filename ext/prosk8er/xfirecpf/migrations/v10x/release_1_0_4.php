<?php
/**
*
* XFire CPF extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Prosk8er <http://www.gotskillslounge.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace prosk8er\xfirecpf\migrations\v10x;

class release_1_0_4 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['xfire_mod_version']) && version_compare($this->config['xfire_mod_version'], '1.0.4', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_xfire' => array('VCHAR', ''),
					'user_xfire_style' => array('BOOL', '6'),
				),
			),

			array('config.add', array('xfire_mod_version', '1.0.4')),
		);
	}
}
