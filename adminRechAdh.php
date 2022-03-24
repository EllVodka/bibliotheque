<h1>Page admin </h1>
<?php
//Recuperation des champs
	$rechNum=$_POST["rechNum"];
	$rechNom=$_POST["rechNom"];
	$rechPrenom=$_POST["rechPrenom"];
	$rechAge=$_POST["rechAge"];
	$rechMail=$_POST["rechMail"];

	//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

//execution de la requete
	$recherche="SELECT * FROM adherent WHERE num='$rechNum' OR nom='$rechNom' OR prenom='$rechPrenom' OR age='$rechAge' OR mail='rechMail' " ;
	$requete=$pdo->query($recherche);
	$resultat=$requete->fetchAll(PDO::FETCH_OBJ);
	
	$total=count($resultat);

	for($n=0;$n<$total;$n++){
			echo '<pre>';
			echo($resultat[$n]->num);
			echo " - ";
			echo($resultat[$n]->nom);
			echo " - ";
			echo($resultat[$n]->prenom);
			echo " - ";
			echo($resultat[$n]->age);
			echo " - ";
			echo ($resultat[$n]->mail);
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