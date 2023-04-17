<?php
if(isset($_POST["BtnSignUp"]))
{
    if (isset($_POST["LOG"]) and isset($_POST["PWD"]))     
    {
        if (!empty($_POST["LOG"]) and !empty($_POST["PWD"])) 
        {
            $pdo=new PDO("mysql:host=localhost;dbname=auth","root","");
            $stm=$pdo->prepare("insert into user(login,password) values(:LOG,:PWD)");
            $stm->execute([
                ":LOG"=>htmlspecialchars($_POST["LOG"]),
                ":PWD"=>password_hash($_POST["PWD"],PASSWORD_DEFAULT)
            ]);  
            header("Location: http://localhost/Projects/Gestion%20de%20Stock/Frontend/SignIn.php");
        }

            //condition pour s'assurer que l utulisateur à utuliser tout les champs. 
        else{
            echo "tu nas rien insserrer ....";
            echo "<a href='SignUp.php'>Je minscris</a> " ;
        }
    }       
} 
?> 
