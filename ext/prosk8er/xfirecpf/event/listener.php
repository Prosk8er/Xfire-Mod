<?php

/**
*
* @package XFire CPF Extension
* @copyright (c) 2014 Prosk8er
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace prosk8er\xfirecpf\event;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
		);
	}

	public function setup($event)
	{
		global $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'prosk8er/xfirecpf',
			'lang_set' => 'xfire',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
