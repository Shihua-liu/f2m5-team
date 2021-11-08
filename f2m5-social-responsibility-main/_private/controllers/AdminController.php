<?php

namespace Website\Controllers;

/**
 * Class AdminController
 *
 *
 */
class AdminController {

	public function index() {

		// $request = request();
		// print_r($request);
		// exit;

		$template_engine = get_template_engine();
		echo $template_engine->render('admin/admin');
	}
	

}