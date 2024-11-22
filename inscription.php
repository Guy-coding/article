
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="article.php"></a>
    <form action="envoi.php"method="post" enctype="multipart/form-data">
    <div class="titre">
        <h1>Bien venu dans notre site de vente darticle</h1>
    </div>
    <div class="container">
        <h1>Veuillez enregistrer un article</h1>
        <div class="photo-picture">
            <img id="image-article" src="images/" alt="photo d article" class="image-cercle">
            <input type="file" name="input-image" id="input-image" accept="image/*" style="display: none;">
            <label for="input-image" class="button-photo"></label>
        </div>
        <div class="form-group">
            <label for="Titre">Titre</label>
            <input type="text"name="titre">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text"name="auteur">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text"name="description">
        </div>
        <div class="form-group">
            <label for="date">Date publication</label>
            <input type="text"name="date">
        </div>
     
        <div class="form-group">
            <label for="contenu">Contenu</label>
            <input type="text"name="contenu">
        </div>
     <input type="submit" name="envoyer" class="btn" value="Enregistrer">
    </div>

</div>
<script src="main.js"></script>
<script src="guy.js"></script>

</form>

   <a href="article.php">article</a> 
</body>
</html>