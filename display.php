<?php
      include 'connect.php';
      ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispaly page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    
    <a href="user.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Add User</a>
    
    <table class="table table-striped">
    
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Prize</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     
      $sql= "Select * from `items`";
      $result= mysqli_query($con, $sql);
      if($result){
        while( $row= mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $name=$row['name'];
            $quantity= $row['quantity'];
            $price= $row['price'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$quantity.'</td>
            <td>'.$price.'</td>
            <td> <a href="update.php?updateid='.$id.'" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Update</a>
            <a href="delete.php?deleteid='.$id.'" class="btn btn-danger " tabindex="-1" role="button" aria-disabled="true">delete</a>
          </tr>';
      }
    }
    ?>
   <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>!-->
  </tbody>

</table>
</div>
    
</body>
</html>