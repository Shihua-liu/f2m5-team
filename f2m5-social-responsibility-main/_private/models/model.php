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


function getAllBlogs() {
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `blogs` ORDER BY `Titel` ASC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function createBlog($titel, $subtitel, $tekst){
	$connection = dbConnect();
	$sql = "INSERT INTO `blogs` (`Titel`, `Subtitel`, `Tekst`) VALUES (:Titel, :Subtitel, :Tekst )";
	$statement = $connection->prepare($sql);
	$params =[
		'Titel' => $titel,
		'Subtitel' => $subtitel,
		'Tekst' => $tekst,
	];
	$statement->execute($params);
}
