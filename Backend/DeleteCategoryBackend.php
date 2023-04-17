<?php require_once '../Backend/con.php'; ?>

<?php
//if(isset($_POST["btnSupprimer"]))
//{
//    $param=$_POST["ID"];
//    $req=$con->prepare("delete from Category where idC=?");
//    $req->execute([$param]);
//   header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayCategoryFrontend.php");
//}
    $param=$_GET["id"];
    $req=$con->prepare("delete from Category where idC=?");
    $req->execute([$param]);
    header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayCategoryFrontend.php");
?>