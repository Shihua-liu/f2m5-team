<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {
		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');
	}

	public function contact() {

		$template_engine = get_template_engine();
		echo $template_engine->render('contact');
	}

	public function over() {

		$template_engine = get_template_engine();
		echo $template_engine->render('over-ons');
	}

	public function trans() {

		$template_engine = get_template_engine();
		echo $template_engine->render('word-transformer');
	}

	public function aanmeld() {
		$template_engine = get_template_engine();
		echo $template_engine->render('aanmeld');
	}
}

