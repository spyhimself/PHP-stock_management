<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:../Frontend/SignIn.html");
    exit();
} ?>
<?php require_once '../Backend/con.php'; ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>


<?php
$idS=$_GET["id"];
$con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
$req=$con->prepare("select * from Supplier where idS=?");
$req->execute([$idS]); 
$T=$req->fetch(PDO::FETCH_ASSOC);
?>
<body>
    <form action="../Backend/UpdateSupplierBackend.php" method="post" class="container pt-5 mt-5" style="max-width: 400px;">
        <input type="hidden" name="idS" value="<?=$idS?>">
        <label for="name" class="form-label"> Name: </label>
        <input type="text" name="name" id="name" value="<?= $T["name"] ?>" required class="form-control">
        <label for="adresse" class="form-label"> Adresse: </label>
        <input type="text" name="adresse" id="adresse" value="<?= $T["adresse"] ?>" required class="form-control">
        <label for="phoneNumber" class="form-label"> Number: </label>
        <input type="text" name="phoneNumber" id="phoneNumber" value="<?= $T["phoneNumber"] ?>" required class="form-control">
        <label for="mail" class="form-label"> Mail: </label>
        <input type="text" name="mail" id="mail" value="<?= $T["mail"] ?>" required class="form-control">
        <div class="text-center">
            <input id="submit"  type="submit" name="btnModifier" value="Modifier" class="btn btn-dark btn-lg mt-2"> 
        </div>
    </form>
</fieldset>
</body>
</html>