<?php

namespace ZohoWP\Elementor;

if (!defined('ABSPATH') || !defined('ZOHOWP_DIR_PATH')) exit;

require_once ZOHOWP_DIR_PATH . '/includes/loader.php';

class Plugin
{
	use \ZohoWP\Loader;

	private static $_instance = null;
	public static function instance()
	{
		if (is_null(self::$_instance))
			self::$_instance = new self();
		return self::$_instance;
	}

	private function __construct()
	{
		self::add_action('init', 'init');
		self::add_action('elementor_pro/forms/actions/register', 'register_form_actions');
	}

	public static function init()
	{
		load_plugin_textdomain('zohowp-elementor', false, dirname(plugin_basename(__FILE__)) . '/languages');
	}

	public static function register_form_actions($registrar)
	{
		require_once ZOHOWP_ELEMENTOR_DIR_PATH . '/forms/actions/subscribe-action.php';
		$registrar->register(new Subscribe_Action());
	}
}
