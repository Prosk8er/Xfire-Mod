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

class release_1_0_7 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['xfire_mod_version'], '1.0.7', '>=');
	}

	static public function depends_on()
	{
		return array('\prosk8er\xfirecpf\migrations\v10x\release_1_0_6');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('xfire_mod_version', '1.0.7')),
		);
	}
}
