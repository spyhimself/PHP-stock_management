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
    <div class="text-center mt-5 mb-2"> 
        <div class="pt-2">
            <a href="../Frontend/CreateCategoryFrontend.php" class="btn bg-dark bg-gradient text-white container py-3 fw-bold"> Create </a>
        </div>
    </div>

    <?php

    $req=$con->prepare("select * from category");
    $req->execute();
    $row_T = $req->get_result()->fetch_all(MYSQLI_ASSOC);?>
    <div class="container">
        <div class="row gy-4 ps-2">
            <?php
            foreach ($row_T as $row)
                {   ?>
                    <div class="col-md-3">   
                        <div class="card border border-dark" style="width: 18rem;">
                            <img src="../Uploads/ST.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <div class="card-text" style="max-height: 120px; overflow-y: auto;"><?php echo $row['description']; ?></div>
                                <div class="text-center pt-2">
                                    <a href="../Frontend/UpdateCategoryFrontend.php?id=<?php echo $row["idC"]; ?>'" class="btn btn-dark mt-2">Update</a>
                                    <a href="../Backend/DeleteCategoryBackend.php?id=<?php echo $row["idC"]; ?>" class="btn btn-warning mt-2" name="btnDelete">Delete</a>
                                </div>
                                <h5 class=" text-center mt-2 "><?php echo $row['idC']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </table>
</body>
<div class="py-5"></div>
<div class="fixed-bottom">
    <?php require 'fouter.html'; ?>
</div>



</html>



