<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<fieldset>
		<legend>Ajout de livre</legend>
		<form method="post" action="adminAjoutLivre.php">
		<label>Entrer un livre à ajouter : </label><br>
		<input type="text" name="Titre" placeholder="Entrez le Titre du livre">
		<br><br>
		<input type="text" name="Auteur" placeholder="Entrez le prenom et le nom de l'auteur">
		<br><br>
		<input type="text" name="Categorie" placeholder="Entrez la Catégorie">
		<br><br>
		<input type="submit" name="" >
	</form>
	</fieldset>
<br>

	<fieldset>
		<legend>Recherhce de livre</legend>
		<form method="post" action="adminRechLivre.php">
		<label>Entrez le code du livre recherchez: </label>
		<br>
		<input type="text" name="rechCode">
		<br><br>
		<label>Entrez le titre recherchez: </label>
		<br>
		<input type="text" name="rechTitre">
		<br><br>
		<label>Entrez l'auteur recherchez : </label>
		<br>
		<input type="text" name="rechAut">
		<br><br>
		<label>Entrez la catégorie recherchez </label>
		<br>
		<input type="text" name="rechCat">
		<br><br>
		<input type="submit" name="">
	</form>
	</fieldset>
<br>

	<fieldset>
		<legend>Modification de livre</legend>
		<form method="post" action="adminModif.php">
		<?php
			$login="admin";
			$mdp="admin1";
			$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque" , $login, $mdp);
			$sql="SELECT * FROM livre";
			$list_livre=$pdo->query($sql);
			$resultat=$list_livre->fetchAll(PDO::FETCH_OBJ);

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
			echo "</pre>";}?>
		<br>
		<label>Quel livre voulais vous modifiez ?(tapez le chiffre) </label>
		<br>
		<input type="text" name="modif">
		<br><br>
		<label>Entrez le nouveau nom du livre</label>
		<br>
		<input type="text" name="nouveauLivre">
		<br><br>
		<label>Entrez le nouveau Auteur du livre</label>
		<br>
		<input type="text" name="nouveauAuteur">
		<br><br>
		<label>Entrez la nouvelle catégorie</label>
		<br>
		<input type="text" name="nouveauCat">
		<br><br>
		<input type="submit" name="continue">
		</form>
	</fieldset>
<br>
<fieldset>
	<legend>Supprimez le livre</legend>
	<form method="post" action="adminSupp.php">
	<label>Entrez le code du livre a supprimer :</label>
	<br>
	<input type="text" name="suppCode">
	<br><br>
	<label>Entrez le titre du livre a supprimer :</label>
	<br>
	<input type="text" name="suppTitre">
	<br><br>
	<label>Entrez le nom de l'auteur à supprimer :</label>
	<br>
	<input type="text" name="suppAut">
	<br><br>
	<label>Entrez la categorie à supprimer : </label>
	<br>
	<input type="text" name="suppCat">
	<br><br>
	<input type="submit" name="">
</form>
</fieldset>
	<fieldset>
		<legend>Recherhce d'adhérent</legend>
		<form method="post" action="adminRechAdh.php">
		<label>Entrez le code de l'adherent : </label>
		<br>
		<input type="text" name="rechNum">
		<br><br>
		<label>Entrez le nom de l'adherent recherchez: </label>
		<br>
		<input type="text" name="rechNom">
		<br><br>
		<label>Entrez le prenom de l'adherent recherchez : </label>
		<br>
		<input type="text" name="rechPrenom">
		<br><br>
		<label>Entrez l'age de l'adherent recherchez </label>
		<br>
		<input type="text" name="rechAge">
		<br><br>
		<label>Entrez le mail de l'adherent recherchez : </label>
		<br>
		<input type="text" name="rechMail">
		<br><br>
		<input type="submit" name="">
	</form>
	</fieldset>

</body>
</html>