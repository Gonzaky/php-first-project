<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '' );
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
    
 $title = $_POST['title'];
 $description = $_POST['description'];
 $price = $_POST['price'];




if (!$title) { 
 $errors[] = 'product title is required';
    };

    if (!$price) { 
        $errors[] = 'product price is required';
           }



           if(!is_dir('images')) { 
             mkdir('images');
           }

           
           if(empty($errors)){

            $image = $_FILES['image'] ?? null;
            $imagePath = $product['image'];

            
           



            if($image && $image['tmp_name']) { 
                
                if($product['image']){
                    unlink($product['image']); // deletes the previous image that was already there
                }

              $imagePath ='images/'.randomString(8).'/'.$image['name'];
              mkdir(dirname($imagePath));

              move_uploaded_file($image['tmp_name'], $imagePath);

              
              /* echo '<pre>';
              var_dump($imagePath);
              echo '</pre>';  */

            }


             
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

function randomString($n) { 
  $characters = '0123456789qwertyuiasdfghjklzxcvbnmZXCVBNMLKJHGFDSAQWERTYUIOP';
  $str ='';

  for($i = 0; $i < $n ; $i++){ 
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
  }
return $str;

}





?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="app.css"  rel="stylesheet">
    <title>Update Product <?php  echo $product['title']?> </title>
  </head>
  <body>

  <p> 
      <a href="index.php" class='btn btn-secondary'> go back to Products</a>
  </p>
    <h1>Update Product <b><?php  echo $product['title']?></b> </h1>

    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error ): ?> 
            <div> <?php echo $error ?> </div>

            <?php endforeach; ?> 
    </div>
    <?php endif; ?> 

    <form action="" method ="post"  enctype="multipart/form-data">

    <?php if($product['image']): ?>
        <img src='<?php echo $product['image']?>'  width='200px'/>
        
        <?php endif; ?>
  <div class="mb-3">
    <label  class="form-label">Product Image</label>
    <br>
    <input type="file" name='image' >
    </div>
    <div class="mb-3">
    <label  class="form-label">Product Title</label>
    <input type="text" class="form-control" name='title' value='<?php echo $title ?>' >
    </div>

    <div class="mb-3">
    <label  class="form-label">Product Description</label>
    <textarea class="form-control" name='description' >  <?php echo $description ?> </textarea>
    </div>

    <div class="mb-3">
    <label  class="form-label">Product Price</label>
    <input type="number" step=".01" class="form-control" name='price' value='<?php echo $price ?>'>
    </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</html>
  </body>