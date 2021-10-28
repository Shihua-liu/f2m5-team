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
class RegistratieController {


	public function registerprocess() {
		
		$error = [];
		$voornaam = trim ($_POST['voornaam']);
		$achternaam = trim ($_POST['achternaam']);
        $gebruikersnaam = trim ($_POST['gebruikersnaam']);
		$email = filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL);
		$wachtwoord = trim ($_POST['wachtwoord']);
        $gender = trim ($_POST['gender']);

        if (empty($voornaam)){
			$error['voornaam'] = 'geen voornaam ingevult';
		}

        if (empty($achternaam)){
			$error['achternaam'] = 'geen achternaam ingevult';
		}
        if (empty($gebruikersnaam)){
			$error['gebruikersnaam'] = 'geen gebruikersnaam ingevult';
		}

		if ($email === false) {
			$error['email'] = 'geen geldig email ingevult';
		}

		if (empty($wachtwoord) || strlen($wachtwoord) < 6 ){
			$error['wachtwoord'] = 'geen geldig wachtwoord ingevult, moet teminste 6 tekens bevatten';
		}

        if (empty($gender)){
            $error['gender'] = 'dit veld is verplicht';
        }

		if (count ($error) === 0 ){
			$connection = dbConnect();
			$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
			$statement = $connection->prepare($sql);
			$statement->execute(['email'=>$email]);
		

			if ($statement->rowCount() === 0){
				$sql = "INSERT INTO `gebruikers` (`voornaam`,`achternaam`, `gebruikersnaam` , `email`, `wachtwoord`,`gender`) VALUES (:voornaam, :achternaam, :gebruikersnaam, :email, :wachtwoord, :gender)";
				$statement = $connection->prepare($sql);
				$safe_password = password_hash($wachtwoord, PASSWORD_DEFAULT);
				$params =[
					'voornaam' => $voornaam,
					'achternaam' => $achternaam,
                    'gebruikersnaam' => $gebruikersnaam,
					'email' => $email,
					'wachtwoord' => $safe_password,
                    'gender' => $gender
				];
				$statement->execute($params);
				echo "klaar";
				exit;
			} else {
				$error['email'] = 'email bestaat al';
			}
			
		}
		$template_engine = get_template_engine();
		echo $template_engine->render('aanmeld' , ['error' => $error]);
	}
}