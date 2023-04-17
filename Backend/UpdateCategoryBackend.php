<?php 

$con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
if(isset($_POST["btnModifier"]))

{
//preparation de la requete
	$requete = $con->prepare('UPDATE categorie set nom=:nom, description=:description, image=:image
		WHERE id_categorie=:id_categorie LIMIT 1');

//liaison des parametre
	$requete->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
	$requete->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
	$requete->bindValue(':image', $_POST['image'], PDO::PARAM_STR);
	$requete->bindValue(':id_categorie', $_POST['id_categorie'], PDO::PARAM_INT);

 //execute la requete (cette methode renvoie true ou false si elle a reussi ou pas)
	$executeIsOk = $requete->execute();

	if($executeIsOk){
		//echo  'L\'article a été mise à jour';
		header("Location:http://localhost/Projects/Gestion%20de%20Stock/Categorie/Afficher_C.php");
	}
	else{
		echo 'Echec de la mise à jour de l\'article';
		header("Location:http://localhost/Projects/Gestion%20de%20Stock/Categorie/Afficher_C.php");
	}
}

?>
