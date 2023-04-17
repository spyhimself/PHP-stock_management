<?php require_once '../Backend/con.php'; ?>

<?php 
if(isset($_POST["btnCreate"]))
{	
$req=$con->prepare("INSERT INTO supplier (name, adresse, phoneNumber, mail) VALUES (?, ?, ?, ?)");
$req->bind_param("ssss", $_POST["name"], $_POST["adresse"], $_POST["phoneNumber"], $_POST["mail"]);
$req->execute();
 
}
header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplaySupplierFrontend.php");		
?>