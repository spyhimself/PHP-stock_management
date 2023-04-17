<?php require_once '../Backend/con.php'; ?>

<?php 
if(isset($_POST["btnCreate"]))
{	
	$req=$con->prepare("INSERT INTO Product (name,description,number,idC,idS) VALUES(?,?,?,?,?)");
	$req->bind_param("sssss",$_POST["name"], $_POST["description"],$_POST["number"], $_POST["idC"], $_POST["idS"]);
	$req->execute(); 
}
header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayProductFrontend.php");

?>