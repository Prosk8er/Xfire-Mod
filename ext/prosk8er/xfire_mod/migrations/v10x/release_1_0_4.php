<?php
/**
*
* @package migration
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

namespace prosk8er\xfire_mod\migrations\v10x;

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
			'add_columns'        => array(
				$this->table_prefix . 'users' => array(
					'user_xfire' => array('VCHAR', ''),
					'user_xfire_style' => array('BOOL', '6'),
				),
			),

			array('config.add', array('xfire_mod_version', '1.0.4')),
		);
	}
}
