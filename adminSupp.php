<h1>PAGE ADMIN</h1>
<?php
//recuperation des champs
	$suppCode=$_POST["suppCode"];
	$suppTitre=$_POST["suppTitre"];
	$suppAut=$_POST["suppAut"];
	$suppCat=$_POST["suppCat"];

//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

//Requete de modification
	$modifier=$pdo->prepare("DELETE FROM livre WHERE code=:code OR Titre=:titre OR Auteur=:auteur OR Catégorie=:cat ");
	$modifier->execute(array(
		'code' => $suppCode,
		'titre' => $suppTitre,
		'auteur' =>$suppAut,
		'cat' => $suppCat
	));
	echo "La suppression de ce livre a bien était effectuer";

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