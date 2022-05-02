<?php 


 /** @var $pdo \PDO */      // this is for phpstorm to accept $pdo thats coming from database.php
require_once "../../database.php"; 
require_once "../../functions.php";

$id= $_GET['id'] ?? null ;


if(!$id){ 
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * from products where id =:id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

           /*  echo '<pre>';
              var_dump($product);
              echo '</pre>';
              exit; */


 $title = $product['title'];
 $description =$product['description'];
 $price = $product['price'];
 

echo $_SERVER['REQUEST_METHOD'].'<br>'; // shows GET or POST

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    
 require_once "../../validate_product.php";

           
           if(empty($errors)){

            
        $statement = $pdo -> prepare("UPDATE products set title = :title, image = :image, 
        description= :description ,price= :price WHERE id= :id");

$statement ->bindValue(':title', $title);
$statement ->bindValue(':image', $imagePath);
$statement ->bindValue(':description', $description);
$statement ->bindValue(':price', $price);
$statement ->bindValue(':id', $id);
$statement -> execute();
header('Location: index.php');
}


}






?> 

<?php  include_once "../../views/partials/header.php"?>



  <p> 
      <a href="index.php" class='btn btn-secondary'> go back to Products</a>
  </p>
    <h1>Update Product <b><?php  echo $product['title']?></b> </h1>

   <?php  include_once '../../views/products/form.php' ?>
</body>
</html>