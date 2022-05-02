


<?php  /* echo '<pre>';
        var_dump($products);
        echo '</pre>'; */
        ?> 

<h1> Product list</h1>


<p><a href ='/products/create'>  <button class='btn btn-success'> Create Product</button></a> </p>

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
      <td>
          <?php if($product['image']):?> 
       <img src='/<?php echo $product['image']?>' width='100px'>
           <?php endif; ?>      
    </td>
      <td><?php echo $product['title']   ?></td>
      <td><?php echo $product['price']   ?></td>
      <td><?php echo $product['create_date']   ?></td>
      <td>
          <a href='/products/update?id=<?php echo $product['id'] ?>' class="btn btn-sm btn-outline-primary">Edit</a>

          <form  style="display: inline-block" method ='post' action='/products/delete'  >
            <input type="hidden" name='id' value="<?php echo $product['id'] ?>">
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
    </td>
     
    </tr>
   <?php  endforeach;  ?> 

  </tbody>
</table>