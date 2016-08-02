<?php


	// On ouvre la bdd et on y insert les éléments
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=Client_ecoplaster;charset=utf8', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}

	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}

	// On ajoute un nouveau client dans client_ecoplaster

	$req = $bdd->prepare('INSERT INTO Clients_eco(nom_prenom, cp, telephone, mail)
	 VALUES(:nomprenom, :cp, :telephone, :mail)');

	$req->execute(array(
		'nomprenom' => $_POST['nom-prenom'],
		'cp' => $_POST['CP'],
		'telephone' => $_POST['phone'],
		'mail' =>$_POST['mail'],
		));
	$req->closeCursor();


	// On récupère le numéro de client de la base pour l'attribuer au nouveau client
	$reponse = $bdd->query('SELECT MAX(id_client) FROM Clients_eco 
		WHERE nom_prenom = "'.$_POST['nom-prenom'].'" AND cp = '.$_POST['CP'].' AND telephone = '.$_POST['phone'].' AND mail= "'.$_POST['mail'].'" 
		ORDER BY id_client');
	$donnees = $reponse->fetch();
	$reponse -> closeCursor(); 

?>
