<?php require_once '../Backend/con.php'; ?>

<?php
    $param=$_GET['id'];
    $req=$con->prepare("delete from Supplier where idS=?");
    $req->execute([$param]);
    header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplaySupplierFrontend.php");
?>