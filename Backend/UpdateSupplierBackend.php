<?php 

$con =new pdo("mysql:host=localhost;dbname=db_stock","root","");

if(isset($_POST["btnModifier"]))
{
	$req=$con->prepare("UPDATE Supplier SET name=?,adresse=?,phoneNumber=?,mail=?
		WHERE idS=?");
	$req->bindParam(1, $_POST["name"], PDO::PARAM_STR);
	$req->bindParam(2, $_POST["adresse"], PDO::PARAM_STR);
	$req->bindParam(3, $_POST["phoneNumber"], PDO::PARAM_INT);
	$req->bindParam(4, $_POST["mail"], PDO::PARAM_STR);
	$req->bindParam(5, $_POST["idS"], PDO::PARAM_INT);
	$executeIsOk = $req->execute();

	if ($executeIsOk) {
		header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplaySupplierFrontend.php");
	} else {
		echo 'Echec de la mise à jour de l\'article';
		header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplaySupplierFrontend.php");
	}
}
?>
