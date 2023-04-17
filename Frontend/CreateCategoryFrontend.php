<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:../Frontend/SignIn.html");
    exit();
} ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<body>
    <form action="../Backend/CreateCategoryBackend.php" method="post" class="container pt-5 mt-5" style="max-width:400px;">
        <label  for="name" class="form-label"> Name:</label>
        <input  type="text" name="name" id="name" class="form-control" required>

        <label  for="description" class="form-label"> Description:</label>
        <input  type="text" name="description" id="description"  class="form-control" required>

        <label  for="image" class="form-label"> Image:</label>
        <input  type="file" name="image" id="image" class="form-control" required>
        
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