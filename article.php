<?php
include 'connect.php';
?>

<html lang="en">
<head>
<link rel="stylesheet" href="yves.css">
<form method="post" action="update_article.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des <article></article></title>
</head>
<body>
    
    <h1>Gestion des article</h1> 
    <table border="1">
        <tr>
            <th>image</th>
            <th>titre</th>
            <th>aureur</th>
            <th>description</th>
            <th>publication</th>
            <th>contenu</th>
            <th>action</th>
        </tr>
        <?php
        //recuperation des element
        $sql= "SELECT*FROM article";
        $result= $conn->query($sql);
         
        //affichage des client dans le tableau après avoir inséré dans le formulaire d inscription 
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo"<tr>";
                echo"<td><img src='images/".$row['image']."'</td>";
                echo"<td>".$row['titre']."</td>";
                echo"<td>".$row['auteur']."</td>";
                echo"<td>".$row['description']."</td>";
                echo"<td>".$row['publication']."</td>";
                echo"<td>".$row['contenu']."</td>";
                echo "<td>";
                //button editer et supprimer client
                echo"<a href='editer_article.php?id=".$row['id'],
                "' class='btn-editer'>editer</a>";
                echo "";
                echo"<a href='supprimer_article.php?id=".$row['id'].
                "' class='btn-supprimer'>Supprimer</a>";
                echo"</td>";
                echo"</tr>";
            }
        }else{
            echo"Aucun articlet enregistré";
        }
        echo"<a href='inscription.php?id=".
        "' class='direction'>creer un nouvel articlet</a>";
        ?>
           
    </table>
    </form>
    <style> 
      img{
        width: 40px;
        border-radius :20px;
      }

    .direction{
        background-color:dodgerblue;
        color: white;
        border-radius:10px;
    }

    .btn{
        background-color:dodgerblue;
        color: white;
        width: 300px;
        font-size:15px;
        border:none;
    }
        .btn-editer{
    background-color: #007bff;  //
    color: #fff;
    padding: 1px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}
.btn-supprimer{
    background-color: #ff0000;
    color: #fff;
    padding: 1px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}
        </style>

    <script>
        
    </script>
</body>
</html>