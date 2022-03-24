
	<h1>Base de données MySQL</h1>
	<?php
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$mail=$_POST["mail"];
	$age=$_POST["age"];

	$login="admin";
	$mdp="admin1";
	$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
	$sql=$pdo->prepare("INSERT INTO adherent (nom,prenom,age,mail) VALUES (:nom,:prenom,:age,:mail)");
	$sql->execute(array(
		"nom" => $nom,
		"prenom" => $prenom,
		"age" => $age,
		"mail" => $mail,
	));
	echo "Vous êtes enregistré dans la base de données "


	/*$sql="SELECT * FROM livre";
	$list_livre=$pdo->query($sql);
	$resultat=$list_livre->fetchAll(PDO::FETCH_OBJ);
	for($n=0;$n<12;$n++){
		echo '<pre>';
		echo($resultat[$n]->code);
		echo " - ";
		echo($resultat[$n]->Titre);
		echo " - ";
		echo($resultat[$n]->Auteur);
		echo "<pre>";}*/

	?>
