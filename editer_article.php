

<?php

include 'connect.php';
 //recuperation de id
 $id= $_GET['id'];

 $sql="SELECT*FROM article WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$result= $stmt->get_result();
$row= $result->fetch_assoc();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
    <form method="post" action="update_article.php">
</head>
<body>
    <div class="titre">
        <h1></h1>
    </div>
    <div class="container">
        <h1>Veuillez Modifier article</h1>
        <div class="form">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                </div>
        <div class="photo-picture">
            <img id="image-article" src="images/<?php echo $row['image'];?>"alt="photo d article" class="image-cercle">
            <input type="file" name="input-image" id="input-image"accept="image/*" style="display: none;">
            <label for="input-image" class="button-photo"></label>
        </div>
        <div class="form-group">
            <label for="Titre">Titre</label>
            <input type="text"name="titre" value="<?php echo $row['titre'];?>">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text"name="auteur"value="<?php echo $row['auteur'];?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text"name="description" value="<?php echo $row['description'];?>">
        </div>
        <div class="form-group">
            <label for="date">Date publication</label>
            <input type="text"name="date" value="<?php echo $row['publication'];?>">
        </div>
     
        <div class="form-group">
            <label for="contenu">Contenu</label>
            <input type="text"name="contenu"value="<?php echo $row['contenu'];?>">
        </div>
     <input type="submit" name="envoyer" class="btn" value="Modifier">
    </div>

</div>
<script src="main.js"></script>
 
   </form>
</body>
</html>