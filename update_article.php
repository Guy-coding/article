<?php
include 'connect.php';

if(isset($_POST['envoyer'])){
    $id=$_POST["id"];
    //deplacement de l image dans le dossier
    $image= $_FILES['input-image'];
    // telecharger l image
    $imageName= basename($image['name']);
    $imagePath="images/".$imageName;
    move_uploaded_file($image["tmp_name"],$imagePath);
    $titre=$_POST["titre"];
    $auteur=$_POST["auteur"];
    $description=$_POST["description"];
    $date=$_POST["date"];
    $contenu=$_POST["contenu"];
    
    $up= "UPDATE article SET image='$imageName',titre='$titre',auteur='$auteur',description='$description',publication='$date',
    contenu='$contenu'WHERE id= '$id'";

    if($conn->query($up)===TRUE){
        header("location:article.php");

    }else{
        echo "Erreur de mise à jour:".$conn->error;
    }
    
    }
  
?>