<?php 
$con = new PDO("mysql:host=localhost;dbname=db_stock", "root", "");

if (isset($_POST["btnModifier"])) {
    $req = $con->prepare("UPDATE Product SET name=?, description=?, number=?, idC=?, idS=? WHERE idP=?");
    $req->bindParam(1, $_POST["name"], PDO::PARAM_STR);
    $req->bindParam(2, $_POST["description"], PDO::PARAM_STR);
    $req->bindParam(3, $_POST["number"], PDO::PARAM_INT);
    $req->bindParam(4, $_POST["idC"], PDO::PARAM_INT);
    $req->bindParam(5, $_POST["idS"], PDO::PARAM_INT);
    $req->bindParam(6, $_POST["idP"], PDO::PARAM_INT);
    $executeIsOk = $req->execute();

    if ($executeIsOk) {
        header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayProductFrontend.php");
    } else {
        echo 'Echec de la mise à jour de l\'article';
        header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/DisplayProductFrontend.php");
    }
}
?>
