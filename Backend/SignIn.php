<?php
session_start();
$erreur="";

if(isset($_POST["BtnSignIn"]))
{
  if (isset($_POST["LOG"]) and isset($_POST["PWD"])) 
  {
    if (!empty($_POST["LOG"]) and !empty($_POST["PWD"])) 
    {
      $LOG=htmlspecialchars($_POST["LOG"]);
      $PWD=htmlspecialchars($_POST["PWD"]);
      $pdo=new PDO("mysql:host=localhost;dbname=auth","root","");
      $stm=$pdo->prepare("select * from user where login=:LOG");
      $stm->execute([":LOG"=>$LOG]);
      $mbr=$stm->fetch();
      if($mbr!=false && password_verify($PWD,$mbr["password"])==true)
      {
        $_SESSION['autoriser']="oui";
        header('Location:http://localhost/Projects/Gestion%20de%20Stock/Frontend/Home.php');
      }
      else
      {
        $erreur="Mauvais login ou mot de passe";
        echo "email ou mot de passe incorrecte !!";
        echo "<a href='SignIn.php'>Connexion</a>  ";
      }
    }
    //condition pour sassurer que l utulisateur a utuliser tout les champs. 
    else
    {
      echo "tu nas rien insserrer ....";
      echo "<a href='SignIn.php'>Connexion</a>";  
    }
  }
}
?>
