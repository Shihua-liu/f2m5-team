<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getUserByEmail($email) {
			$connection = dbConnect();
			$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
			$statement = $connection->prepare($sql);
			$statement->execute(['email'=>$email]);

			if($statement->rowCount() === 1){
				return $statement->fetch();
			}
			return false;

			
}

function getUserById($id) {
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `id` = :id";
	$statement = $connection->prepare($sql);
	$statement->execute(['id'=>$id]);

	if($statement->rowCount() === 1){
		return $statement->fetch();
	}
	return false;

	
}

function getAllTopics() {
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `topic` ORDER BY `Titel` ASC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getAllTopicsDescription(){
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `topic` ORDER BY `description` ASC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}



function getAllBlogs() {
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `blogs` ORDER BY `Datum` DESC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getBlogPost($id) {
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `blogs` WHERE id = :id";
	$statement  = $connection->prepare( $sql );
	$statement->execute(
		[
			'id' => $id
		]
		);

	return $statement->fetch();
}

function createBlog($id, $titel, $subtitel, $tekst){
	$connection = dbConnect();
	$sql = "INSERT INTO `blogs` (`id`, `Titel`, `Subtitel`, `Tekst`, `Datum`) VALUES (:id, :Titel, :Subtitel, :Tekst, :Datum)";
	$statement = $connection->prepare($sql);
	$params =[
		'id'		=> $id,
		'Titel' 	=> $titel,
		'Subtitel' 	=> $subtitel,
		'Tekst' 	=> $tekst,
		'Datum'     => date("m.d.y")
	];
	$statement->execute($params);
}


function createTopic($titel, $desc){
	$connection = dbConnect();
	$sql = "INSERT INTO `topic` (`Titel`, `description`) VALUES (:Titel, :description)";
	$statement = $connection->prepare($sql);
	$params =[
		'Titel' => $titel,
		'description' => $desc
	];
	$statement->execute($params);
}

