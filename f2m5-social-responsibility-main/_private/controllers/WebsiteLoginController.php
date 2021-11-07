<?php

namespace Website\Controllers;

use Error;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteLoginController{


	public function login() {
        $template_engine = get_template_engine();
		echo $template_engine->render('login/login');
	}
	public function loginprocess() {
        $result = validateRegistrationData($_POST);

		if(userNotRegisterd($result['data']['email'])){
			$result['error']['email'] ='deze gebruiker is niet bekend';
		} else {
			$user = getUserByEmail($result['data']['email']);


			if(password_verify($result['data']['wachtwoord'], $user['wachtwoord'])){
				loginUser($user);

				redirect(url('blog-index'));
			}else{
				$result['error']['wachtwoord'] ='wachtwoord is niet correct';
			}
		}


		$template_engine = get_template_engine();
		echo $template_engine->render('login/login', ['error' => $result['error']]);
	}
	public function userDashboard(){
		loginCheck();

		$template_engine = get_template_engine();
		echo $template_engine->render('blog');
	}

	public function logout(){
		logoutUser();
		redirect(url('home'));
	}

}

