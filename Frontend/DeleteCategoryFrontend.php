<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="\Projects\Gestion de Stock\Css\myStyle.css">
 <link rel="stylesheet" href="\Projects\Gestion de Stock\Css\Style_Form.css">
 <link rel="stylesheet" href="\Projects\Gestion de Stock\Css\Style_MasterPage.css">
<title>Home</title>
</head>

<body>
    <legend id="legend">Categorie</legend>
    <form action="Supprimer_C.php" method="post">
        <div class="champ">
            <label for="id_c"> Categorie:</label><br>
            <select name="ID" id="id_c" style="width:300px; height:30px; background-color:#FFEBCD; border-radius: 10px;
            font-size: 20px; font-family:cursive;">
            <?php
            $con =new pdo("mysql:host=localhost;dbname=stock","root","");
            $req=$con->prepare("select * from Categorie");
            $req->execute([]);
            $Categorie=$req->fetchAll(PDO::FETCH_ASSOC);
            foreach($Categorie as $c){
                echo '<option value="'.$c["id_categorie"].'">'.$c["nom"].'</option>';
            }
            ?>
        </select>
        <br><br><br><br><br><br><br><br>
    </div>
    <input id="submit"  type="submit" name="btnSupprimer" value="Supprimer">
</form>
</fieldset>
</body>
</html>