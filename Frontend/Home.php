<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:../Frontend/SignIn.php");
    exit();
} 
?>
<?php require_once '../Backend/con.php'; ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<html>
<body>
    <div class="text-center pt-5 mt-5">
        <h1>Welcome</h1>
        <img class="border border-warning mt-5" src="../Uploads/ST.jpg" alt="StockImg" style="width: 40rem;">
    </div>
</body>
<div class="py-5"></div>
<div class="fixed-bottom">
    <?php require 'fouter.html'; ?>
</div>



</html>
