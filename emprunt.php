<center><h1>EMPRUNT</h1></center>
<?php 
	//recuperation des champs
	$prenom=$_POST["prenomEmprunt"];
	$nom=$_POST["nomEmprunt"];
	$titre=$_POST["titre"];
	$auteur=$_POST["auteur"];

	//connection a la bdd
	try {
		$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	//verification utilisateur
	$verif="SELECT * FROM adherent WHERE prenom='$prenom' and nom='$nom' ";
	$requete=$pdo->query($verif);
	$resultat=$requete->fetchAll(PDO::FETCH_OBJ);
	$nbVerif=count($resultat);
	if ($nbVerif!= 0 ) {
		echo "sa marche";


	}
	else
	{
		echo "Cette utilisateur n'existe pas dans la base de donnée ,inscrivez vous";
	}

	//verif livre
	$verifLivre="SELECT * FROM livre WHERE Titre='$titre' AND Auteur='$auteur' ";
	$requeteLivre=$pdo->query($verifLivre);
	$resultatLivre=$requeteLivre->fetchAll(PDO::FETCH_OBJ);
	$nbLivre=count($resultatLivre);
	if ($nbLivre!=0) {
		echo "<br>ce livre existe";
	}
	else
	{
		echo " <br>ce livre n'existe pas ";
	}

	//recuperation du code et num

	$codeLivre="SELECT code FROM livre WHERE Titre='$titre' and Auteur='$auteur' ";
	$requeteCode=$pdo->query($codeLivre);
	$resultatCode=$requeteCode->fetch(PDO::FETCH_OBJ);
	for($n=0;$n<count($requeteCode);$n++)
	{
		echo '<pre>';
		echo($resultatCode[$n]->code);
	}


?>