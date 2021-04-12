<?php
require_once 'connexion.php';
class ModelUser{
	public static function createUser($post){
		$db = connexion();
		$reponse = $db->prepare('INSERT INTO usertest (nom, prenom, mail, tel, adresse, photo, description) VALUES (?,?,?,?,?,?,?)');
		$reponse->execute([$post['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['photo'], $_POST['description']]);
	}

	public static function listUsers(){
		$db = connexion();
		$reponse = $db->prepare('SELECT * FROM usertest ORDER BY id ASC');
		$reponse->execute();
		return $reponse->fetchAll();
	}
}