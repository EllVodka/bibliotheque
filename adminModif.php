<h1>PAGE ADMIN</h1>
<?php
//recuperation des champs
	$modif=$_POST["modif"];
	$livre=$_POST["nouveauLivre"];
	$auteur=$_POST["nouveauAuteur"];
	$categorie=$_POST["nouveauCat"];

//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

//Requete de modification
	$modifier=$pdo->prepare("UPDATE livre SET Titre = :titre, Auteur = :auteur, Catégorie = :cat WHERE code = :code");
	$modifier->execute(array(
		'titre' => $livre,
		'auteur' =>$auteur,
		'cat' => $categorie,
		'code' => $modif
	));
	echo "La modification de ce livre a bien était effectuer";

?>