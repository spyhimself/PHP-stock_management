<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:../Frontend/SignIn.html");
    exit();
} ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<body>
    <form action="../Backend/CreateSupplierBackend.php" method="post" class="container pt-5 mt-5" style="max-width: 400px;">
        <label for="name" class="form-label"> Name: </label>
        <input  type="text" name="name" id="name" class="form-control" required>
        <label for="adresse" class="form-label"> Adresse: </label>
        <input  type="text" name="adresse" id="adresse" class="form-control" required>
        <label for="phoneNumber" class="form-label"> Phone Number: </label>
        <input  type="text" name="phoneNumber" id="phoneNumber" class="form-control" required>
        <label for="mail" class="form-label"> @Mail: </label>
        <input  type="text" name="mail" id="mail" class="form-control" required>
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