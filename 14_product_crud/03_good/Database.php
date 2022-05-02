<?php

namespace app;

use app\modals\Product;
// use PDO;

use PDO;

class Database {
   public \PDO $pdo;
  public static Database $db;

    public function __construct() {
        
        $this->pdo = new \PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '' );
       $this->pdo -> setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
         //  ou can use '\PDO' to make it absolute path instead of namespace app;
         // or u can write up there " use PDO;"

         self::$db = $this;
 }


 public function getProducts($search = ''){

    $search = $_GET['search'] ?? '';

if($search){ 

  $statement = $this->pdo -> prepare('SELECT * FROM products where title like :title order by create_date desc');
  $statement->bindValue(':title', "%$search%" );

} else { 
    $statement = $this->pdo -> prepare('SELECT * FROM products order by create_date desc');
}

$statement -> execute();

 return $statement-> fetchAll(\PDO::FETCH_ASSOC);
 }



 public function getProductById($id){

  $statement = $this->pdo->prepare('SELECT * from products where id =:id');
  $statement->bindValue(':id', $id);
  $statement->execute();
  return $statement->fetch(PDO::FETCH_ASSOC);
  
}



 public function createProduct( Product $product){ 

  $statement = $this->pdo -> prepare("INSERT INTO products(title,image,description,price,create_date)
  values (:title , :image , :description , :price , :date) ");
  
  $statement ->bindValue(':title', $product->title);
  $statement ->bindValue(':image', $product->imagePath);
  $statement ->bindValue(':description', $product->description);
  $statement ->bindValue(':price', $product->price);
  $statement ->bindValue(':date', date('Y-m-d H:i:s'));
  $statement -> execute();
  header('Location: index.php');

 }

 public function deleteProduct($id){

  $statement = $this->pdo->prepare('DELETE FROM products where id= :id');
  $statement-> bindValue(':id', $id);
  $statement-> execute();


  }

public function updateProduct(Product $product){
  $statement = $this->pdo -> prepare("UPDATE products set title = :title, image = :image, 
  description= :description ,price= :price WHERE id= :id");

$statement ->bindValue(':title', $product->title);
  $statement ->bindValue(':image', $product->imagePath);
  $statement ->bindValue(':description', $product->description);
  $statement ->bindValue(':price', $product->price);
$statement ->bindValue(':id', $product->id);
$statement -> execute();

}


}