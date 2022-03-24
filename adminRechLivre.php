<h1>Page admin</h1>
<?php
//Recuperation des champs
	$rechCode=$_POST['rechCode'];
	$rechTitre=$_POST['rechTitre'];
	$rechAut=$_POST['rechAut'];
	$rechCat=$_POST['rechCat'];

	//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

//execution de la requete
	$recherche="SELECT * FROM livre WHERE Code='$rechCode' OR Titre='$rechCode' OR Auteur='$rechAut' OR Catégorie='$rechCat'  ";
	$requete=$pdo -> query($recherche);
	$resultat=$requete->fetchAll(PDO::FETCH_OBJ);
	
	$total=count($resultat);

	for($n=0;$n<$total;$n++){
			echo '<pre>';
			echo($resultat[$n]->code);
			echo " - ";
			echo($resultat[$n]->Titre);
			echo " - ";
			echo($resultat[$n]->Auteur);
			echo " - ";
			echo($resultat[$n]->Catégorie);
			echo "<pre>";
		}

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