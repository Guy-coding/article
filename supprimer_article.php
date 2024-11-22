<?php
include 'connect.php';

$id=$_GET['id'];

$sql="DELETE FROM article WHERE id='$id'";
if($conn->query($sql)===TRUE){
    echo"article supprime";


}else{
    echo"erreur de suppression:".$conn->error;
}
header("location:article.php");

?>