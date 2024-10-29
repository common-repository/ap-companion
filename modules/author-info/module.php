<?php
namespace ApCompanion\Modules\AuthorInfo;

use ApCompanion\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Module_Base {

	public function get_name() {
		return 'ap-author-info';
	}

	public function get_widgets() {

		$widgets = [
			'Author_Info'
		];

		return $widgets;
	}
}
