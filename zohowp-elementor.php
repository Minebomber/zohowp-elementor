<?php
/*
Plugin Name: ZohoWP - Elementor Integration
Description: Connects Elementor Pro forms to Zoho Campaigns mailing lists
Version: 1.0.0
Author: Mark Lagae
Text Domain: zohowp-elementor
*/

define('ZOHOWP_ELEMENTOR_DIR_PATH', plugin_dir_path(__FILE__));
define('ZOHOWP_ELEMENTOR_VERSION', '1.0.0');

require_once ZOHOWP_ELEMENTOR_DIR_PATH . '/includes/class-plugin.php';
\ZohoWP\Elementor\Plugin::instance();
