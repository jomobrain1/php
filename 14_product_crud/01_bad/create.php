<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud1','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

function randomString($n){
  $characters="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
  $str="";
  for ($i=0; $i < $n ; $i++) { 
    $index=rand(0,strlen($characters)-1);
    $str.=$characters[$index];
  
  }
  return $str;
  
  }
// echo'<pre>';
// echo var_dump($_FILES).'<br>'; 
// echo'</pre>';
// exit;
//======================================================================//
// query string===> create.php?image=&title=&description=&price=

///If  <form action="" method="GET">
// echo'<pre>';
// echo var_dump($_GET).'<br>'; 
// echo'</pre>';

//  echo'<pre>';
//  echo var_dump($_SERVER).'<br>'; 
//  echo'</pre>';
// echo $_SERVER['REQUEST_METHOD'].'<br>';
$title="";
$description="";
$price="";
$date= "";
$errors=[];
if($_SERVER['REQUEST_METHOD']=='POST'){
$title=$_POST['title'];
$description=$_POST['description'];
$price=$_POST['price'];
$date= Date('Y-m-d H:i:s');

//check errors

if(!$title){
$errors[]="Product title is required";

}

if(!$price){
  $errors[]="Product price is required";
  
  }
if(!is_dir('images')){
  mkdir('images');
}

if(empty($errors))

{
  
  $imagePath="";
  $image=$_FILES['image'] ?? null;
  if($image && $image['tmp_name']){
    $imagePath='images/'.randomString(8).'/'.$image['name'];
    // echo'<pre>';
    // echo var_dump($imagePath).'<br>'; 
    // echo'</pre>';
    mkdir(dirname($imagePath));

    move_uploaded_file($image['tmp_name'],$imagePath);
  }  
  $statement=$pdo->prepare("INSERT INTO products(`title`,`description`,`image`,`price`,`create_date`)
  VALUE(:title,:description,:image,:price,:date) ");

$statement->bindValue(':title',$title);
$statement->bindValue(':description',$description);
$statement->bindValue(':image',$imagePath);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',$date);

$statement->execute();
 header('location:index.php');
}

//empty errors end


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PRODuct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <h1>Create a Product  <a href="./index.php" class="btn btn-success">view products</a>  </h1>
    
    <?php if(!empty($errors)) :?>
      <section class="px-5 alert alert-danger">
      <?php foreach ($errors as $error) : ?>
       <p><?php echo $error ?></p>
      <?php endforeach; ?>
    </section>
    <?php endif?>

    <form  method="POST" enctype="multipart/form-data">
      
    <div class="mb-3">
    <label class="form-label">select image</label>
    <input type="file" name="image" class="form-control">    
  </div>
  <div class="mb-3">
    <label class="form-label">product title</label>
    <input type="text" name="title" value="<?php echo $title ?>" class="form-control">    
  </div>
  <div class="mb-3">
    <label class="form-label">add Description</label>
<textarea name="description" class="form-control">
<?php echo $description ?> 
</textarea>   
  </div>
  <div class="mb-3">
    <label class="form-label">price</label>
    <input type="number" value="<?php echo $price ?>" name="price" step=".01" class="form-control">    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div> 
</body>
</html>