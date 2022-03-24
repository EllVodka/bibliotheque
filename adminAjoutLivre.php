<h1>PAGE ADMIN</h1>
<?php
//recuperation des champs
	$titre=$_POST["Titre"];
	$auteur=$_POST["Auteur"];
	$categorie=$_POST["Categorie"];
	$dispo='1';

//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	
//preparation de la requete
	$ajouter = $pdo->prepare("INSERT INTO livre(disponibilité,Titre,Auteur,Catégorie) VALUES(:disponibilite,:Titre,:Auteur,:Categorie)");

//execution de la requete
	$ajouter -> execute(array(
		'disponibilite' => $dispo,
		'Titre' => $titre,
		'Auteur' => $auteur,
		'Categorie' => $categorie
		
	));
//petit message
	echo "Votre livre ",$titre," de ",$auteur," de type ",$categorie," a était ajouter dans la bdd";
?>
<style type="text/css">
	h1{
		font-family: arial;

	}
	a{
		text-decoration: none;
		color: red;
		border: thin solid black;
		border-radius: 2rem;
		padding: 1rem;
	}
</style>
<br><br><br>
<center>
	<a href="adminMenu.php">Cliquez ici pour revenir dans le menu</a>
</center>