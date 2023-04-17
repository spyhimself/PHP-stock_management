<?php require_once '../Backend/con.php'; ?>

<?php 
if(isset($_POST["btnCreate"]))
{	
	$req=$con->prepare("INSERT INTO Category (name,description,image) VALUES (?,?,?)");
	$req->bind_param("sss", $_POST["name"], $_POST["description"],$_POST["image"]);
	$req->execute(); 
}
header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayCategoryFrontend.php");
?>