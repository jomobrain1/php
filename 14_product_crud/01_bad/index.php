<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud1','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement= $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC ');
$search=$_GET['search'] ?? '';
if($search){
  $statement= $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC ');
  $statement->bindValue(':title',"%$search%");
}else{
  $statement= $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC ');
}
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// echo var_dump($products);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Welcome'; ?></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <h1> PRODUCT Crud</h1>
    <p>
        <a href="create.php" class="btn btn-success">ADD A PRODUCT</a>
    </p>
  
   <!-- search form -->
 <form action="" >
 <div class="input-group mb-3">
<input type="search" name="search"
value="<?php echo $search ?>"
 class="form-control" placeholder="search product">
  <button type="submit" class="btn btn-success" >search</button>
</div>
 </form>


     

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">price</th>
      <th scope="col">create Date</th>
      
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($products as $i=> $product):?>
    <tr>
      
     <th scope="row"><?php echo $i + 1  ?></th>
     <td> 
     <!-- If there is an Image -->
     <?php if($product['image']):?>
      <img src="<?php echo $product['image']  ?>" width="150"> 
      
     <?php endif; ?>
     <!-- if no image -->
     <?php if(!$product['image']):?>
     <img src="images/no/no.png" width="150">
     <?php endif; ?>
    </td>
     <td><?php echo $product['title']  ?></td>
     <td><?php echo $product['price']  ?></td>
     <td><?php echo $product['create_date'] ?></td>
     <td>
       <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-outline-primary">Edit</a>
      <!-- using Get -->
       <!-- <a href="delete.php?id=<?php echo $product['id'] ?>" class="btn btn-outline-danger">Delete</a>
       -->
       <!-- Using post -->
      <form style="display:inline-block ;" method="post" action="delete.php">
       <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
       <button type="submit" class="btn btn-outline-danger">delete</button>
      </form>
      

     </td>
     </tr>
<?php endforeach; ?>

  </tbody>
</table>
 </div>    
</body>
</html>