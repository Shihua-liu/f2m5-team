<?php
// Dit bestand hoort bij de router, en bevat nog een aantal extra functies je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect() {

	$config = get_config( 'DB' );

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO( $dsn, $config['USER'], $config['PASSWORD'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $connection;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}

}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url( $path = '' ) {
	return get_config( 'BASE_URL' ) . $path;
}

function get_config( $name ) {
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[ $name ];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	$template_engine = new League\Plates\Engine( $templates_path );
	$template_engine->addFolder('layouts', $templates_path . '/layouts');

	return $template_engine;

}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is( $name ) {
	$route = request()->getLoadedRoute();

	if ( $route ) {
		return $route->hasName( $name );
	}

	return false;

}

function validateRegistrationData($data){
	$error = [];
		$voornaam = trim ($data['voornaam']);
		$achternaam = trim ($data['achternaam']);
        $gebruikersnaam = trim ($data['gebruikersnaam']);
		$email = filter_var ($data['email'], FILTER_VALIDATE_EMAIL);
		$wachtwoord = trim ($data['wachtwoord']);
        $gender = trim ($data['gender']);

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

		$data = [
			'voornaam' => $voornaam,
			'achternaam' => $achternaam,
			'gebruikersnaam' => $gebruikersnaam,
			'email' => $email,
			'wachtwoord' => $wachtwoord,
			'gender' => $gender
		];

		return [
			'data' => $data,
			'error' => $error
		];


		
}

function validateTopicData($data){
	$error = [];
		$titel = trim ($data['titel']);
		$desc = trim ($data['desc']);

		if (empty($titel)){
			$error['titel'] = 'Vul een titel in';
		}

        if (empty($desc)){
            $error['desc'] = 'vul wat tekst toe';
        }

		$data = [
			'titel' => $titel,
			'desc' => $desc,
			
		];

		return [
			'data' => $data,
			'error' => $error
		];


		
}


function validateBlogData($data){
	$error = [];		
		$titel 		= trim ($data['Titel']);
		$subtitel 	= trim ($data['Subtitel']);
        $tekst 		= trim ($data['Tekst']);

        if (empty($titel)) {
			$error['Titel'] = 'Vul een titel in';
		}
        if (empty($subtitel)) {
			$error['Subtitel'] = 'Vul een subtitel in';
		}
		if (empty($tekst)) {
			$error['Tekst'] = 'Vul een tekst in';
		}
		

		$data = [
			'Titel' 	=> $titel,
			'Subtitel' 	=> $subtitel,
			'Tekst' 	=> $tekst,
			'Datum' => date("m.d.y")
			
		];

		return [
			'data' => $data,
			'error' => $error
		];

		
}


function userNotRegisterd($email){
			$connection = dbConnect();
			$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
			$statement = $connection->prepare($sql);
			$statement->execute(['email'=>$email]);

			return ($statement->rowCount() === 0);
}

function createUser($voornaam, $achternaam, $gebruikersnaam, $email, $wachtwoord, $gender){
				$connection = dbConnect();
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
}

function loginUser($user){
	$_SESSION['user_id'] = $user['id'];
}

function logoutUser(){
	unset($_SESSION['user_id']);
}

function isloggedIn(){
	return ! empty($_SESSION['user_id']);
}

function loginCheck(){
	if ( ! isloggedIn()){
		$login_url = url('login/login');
		redirect($login_url);
	}
}

function loggedInUser(){

	if (!isloggedIn()){
		return false;
	}

	return getUserById($_SESSION['user_id']);
}

function getLoggedInUserEmail(){
	$email = "niet ingelogged";
	
	if(!isloggedIn()){
		return $email;
	}
	$user_id = $_SESSION['user_id'];
	$user = getUserById($user_id);

	if($user){
		$email = $user['email'];
	}

	return $email;
}