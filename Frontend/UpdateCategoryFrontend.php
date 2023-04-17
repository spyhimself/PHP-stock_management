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

$idC=$_GET["id"];
$con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
$req=$con->prepare("select * from Category where idC=?");
$req->execute([$idC]); 
$T=$req->fetch(PDO::FETCH_ASSOC);
?>

<body>
  <form action="../Backend/UpdateCategoryBackend.php" method="post" class="container pt-5 mt-5" style="max-width: 400px;">
    <input type="hidden" name="idC" value="<?= $T["idC"] ?>">
    <label for="idC" class="form-label"> Category:</label>
    <select name="idC" id="idC" class="form-select">
      <?php
      $con =new pdo("mysql:host=localhost;dbname=db_stock","root","");
      $req=$con->prepare("select * from Category");
      $req->execute([]);
      $Categorie=$req->fetchAll(PDO::FETCH_ASSOC);
      foreach($Categorie as $c){
        echo '<option value="'.$c["idC"].'">'.$c["name"].'</option>';
      }
      ?>
    </select>
    <label for="name" class="form-label"> Name:</label>
    <input  type="text" name="name" id="name" value="<?= $T["name"] ?>" required class="form-control">
    <label for="description" class="form-label"> Description:</label>
    <textarea  type="text" name="description" id="description" required class="form-control"><?= $T["description"] ?></textarea>
    <label for="image" class="form-label"> Image:</label>
    <input  type="file" name="image" id="image" placeholder="Image" required class="form-control">

    <div class="text-center">
      <input id="submit"  type="submit" name="btnModifier" value="Modifier" class="btn btn-dark btn-lg mt-2"> 
    </div>
  </form>
</body>
</html>