<?php

include 'connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $image= $_FILES["input-image"];

  // telecharger l image
  $imageName= basename($image['name']);
  $imagePath="images/".$imageName;
  move_uploaded_file($image["tmp_name"],
  $imagePath);

  $titre=$_POST["titre"];
  $auteur=$_POST["auteur"];
  $description=$_POST["description"];
  $date=$_POST["date"];
  $contenu=$_POST["contenu"];

  //insertion

  $query="INSERT INTO article(image,titre,auteur,description,publication,contenu)
  VALUES(?,?,?,?,?,?)";
  $stmt= $conn->prepare($query);
  $stmt->bind_param("ssssss",$imageName,$titre,$auteur,$description,$date,$contenu);
  $stmt->execute();
  
  // redirection:

  header("location:article.php");
  
}


?>