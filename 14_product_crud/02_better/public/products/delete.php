<?php

 /*   echo '<pre>';
 var_dump($_GET);
 echo '</pre>';  */

 require_once "../../database.php"; 



 $id= $_POST['id'] ?? null ;


 if(!$id){ 
     header('Location: index.php');
     exit;
 }

/*  echo '<pre>';
 var_dump($id);
 echo '</pre>';  */

 $statement = $pdo->prepare('DELETE FROM products where id= :id');
 $statement-> bindValue(':id', $id);
 $statement-> execute();

 header('Location: index.php');

