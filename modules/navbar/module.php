<?php
namespace ApCompanion\Modules\Navbar;

use ApCompanion\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Module_Base {

	public function get_name() {
		return 'ap-navbar';
	}

	public function get_widgets() {

		$widgets = [
			'Navbar',
		];

		return $widgets;
	}
}