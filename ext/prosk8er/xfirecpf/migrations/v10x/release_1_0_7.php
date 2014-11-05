<?php
/**
*
* @package migration
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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