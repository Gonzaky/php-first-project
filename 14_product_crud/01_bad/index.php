<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '' );
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





$search = $_GET['search'] ?? '';

if($search){ 

  $statement = $pdo -> prepare('SELECT * FROM products where title like :title order by create_date desc');
  $statement->bindValue(':title', "%$search%" );

} else { 
    $statement = $pdo -> prepare('SELECT * FROM products order by create_date desc');
}

$statement -> execute();

$products = $statement-> fetchAll(PDO::FETCH_ASSOC); // fetch the date as an associate array
/* 
echo '<pre>';
var_dump($products);
echo '</pre>'; */





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
    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Products CRUD</h1>

<p><a href ='create.php'>  <button class='btn btn-success'> Create Product</button></a> </p>

<form>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search for products here" name='search'  value='<?php echo $search ?>'>
  <button class="btn btn-outline-secondary" type="submit">Search</button>
</div>
</form>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $i => $product):  ?>
        <tr>
      <th scope="row"> <?php echo $i + 1  ?></th>
      <td><img src='<?php echo $product['image']   ?>' width='100px'></td>
      <td><?php echo $product['title']   ?></td>
      <td><?php echo $product['price']   ?></td>
      <td><?php echo $product['create_date']   ?></td>
      <td>
          <a href='update.php?id=<?php echo $product['id'] ?>' class="btn btn-sm btn-outline-primary">Edit</a>

          <form  style="display: inline-block" method ='post' action='delete.php'  >
            <input type="hidden" name='id' value="<?php echo $product['id'] ?>">
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
    </td>
     
    </tr>
   <?php  endforeach;  ?> 

  </tbody>
</table>


  </body>
</html>