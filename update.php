<?php
 include 'connect.php';
 $id= $_GET['updateid'];
 $sql="Select * from `items` where id=$id";
 $result =mysqli_query($con, $sql);
 $row= mysqli_fetch_assoc($result);
 $name=$row['name'];
 $quantity = $row['quantity'];
    $price = $row['price'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];


    $sql="update `items` set id='$id',name='$name',quantity='$quantity',
    price='$price' where id='$id'";
    $result= mysqli_query($con,$sql); 
    if($result){
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <form method="post">
     <div >
    <label >Product Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Product name"
       value=<?php 
          echo $name;
       ?>
    >
    
      </div>
      <div >
      <label >Quantity</label>
      <input name="quantity" type="number" class="form-control" placeholder="Enter quantity"
      value=<?php 
          echo $quantity;
       ?>
      >
      </div>
      <div >
      <label >Price</label>
      <input name="price" type="number" class="form-control" placeholder="Enter price"
      value=<?php 
          echo $price;
       ?>
      >
      </div>
  
   <button name="submit" type="submit" class="btn btn-primary">Update info</button>
</form>
    </div>
    
</body>
</html>