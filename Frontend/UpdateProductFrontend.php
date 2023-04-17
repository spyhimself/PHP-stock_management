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

$idP=$_GET["id"];
$con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
$req=$con->prepare("select * from product where idP=?");
$req->execute([$idP]); 
$T=$req->fetch(PDO::FETCH_ASSOC);
?>
<body>

  <form action="../Backend/UpdateProductBackend.php" method="post" class="container pt-5 mt-5" style="max-width: 400px;">
    <input type="hidden" name="idP" value="<?= $T["idP"] ?>">
    <label for="name" class="form-label"> Name: </label>
    <input type="text" name="name" id="name" value="<?= $T["name"] ?>" required class="form-control">
    <label for="description" class="form-label"> Description: </label>
    <textarea type="text" name="description" id="description" required class="form-control " style="height: 150px;"><?= $T["description"] ?></textarea>
    <label for="number" class="form-label"> Numbre in stock: </label>
    <input type="number" name="number" id="number" value="<?= $T["number"] ?>" required class="form-control">
    <label for="idC" class="form-label"> Category: </label>
    <select class="form-select" name="idC" id="idC" >
     <?php
     $con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
     $req=$con->prepare("select * from category");
     $req->execute([]);
     $fournisseur=$req->fetchAll(PDO::FETCH_ASSOC);
     foreach($fournisseur as $f){

      echo '<option value="'.$f["idC"].'">'.$f["name"].'</option>';
    }
    ?>
  </select>

  <label for="idS" class="form-label"> Supplier:</label>
  <select class="form-select" name="idS" id="idS">

    <?php
    $con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
    $req=$con->prepare("select * from supplier");
    $req->execute([]);
    $fournisseur=$req->fetchAll(PDO::FETCH_ASSOC);
    foreach($fournisseur as $f){
      echo '<option value="'.$f["idS"].'">'.$f["name"].'</option>';
    }
    ?>
  </select>
  <div class="text-center">
    <input id="submit"  type="submit" name="btnModifier" value="Modifier" class="btn btn-dark btn-lg mt-2"> 
  </div>
</form>
</body>
</html>