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
class WebsiteRegistratieController{


	public function registerprocess() {
		
		$result = validateRegistrationData($_POST);

		if (count ($result['error']) === 0 ){
			$user_not_registerd = userNotRegisterd($result['data']['email']);
		

			if (userNotRegisterd($result['data']['email'])){
				
				createUser($result['data']['voornaam'], $result['data']['achternaam'], $result['data']['gebruikersnaam'], $result['data']['email'], $result['data']['wachtwoord'], $result['data']['gender']);

				redirect(url("login"));
				exit;
			} else {
				$error['email'] = 'email bestaat al';
			}
			
		}
		$template_engine = get_template_engine();
		echo $template_engine->render('aanmeld' , ['error' => $result['error']]);
	}

}