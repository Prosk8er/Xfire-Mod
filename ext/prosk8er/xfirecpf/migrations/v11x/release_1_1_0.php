<?php
/**
*
* @package migration
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace prosk8er\xfirecpf\migrations\v11x;

class release_1_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['xfire_cpf_version'], '1.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\prosk8er\xfirecpf\migrations\v10x\release_1_0_8');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('xfire_cpf_version', '1.1.0')),
			array('config.remove', array('xfire_mod_version', '1.0.8')),
		);
	}
}
