<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:../Frontend/SignIn.html");
    exit();
} ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<body>
    <form action="../Backend/CreateProductBackend.php" method="post" class="container pt-5 mt-5" style="max-width: 400px;">
        <label for="name" class="form-label"> Nom: </label>
        <input type="text" name="name" id="name" class="form-control" required>
        <label for="description" class="form-label"> Description: </label>
        <input type="text" name="description" id="description" class="form-control" required>
        <label for="number" class="form-label"> Numbre in stock: </label>
        <input  type="number" name="number" id="number" class="form-control" required>
        <label for="idC" class="form-label"> Category: </label>
        <select name="idC" id="idC" class="form-control">
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
        <select name="idS" id="idS" class="form-control">
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
        <div class="text-center pt-4">
            <input id="submit"  type="submit" name="btnCreate" value="Create" class="btn btn-dark btn-lg">                   
        </div>
    </form>
</body>
<div class="py-5"></div>
    <div class="fixed-bottom">
        <?php require 'fouter.html'; ?>
    </div>
</html>