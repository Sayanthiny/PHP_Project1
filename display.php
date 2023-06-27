<?php
    include "connect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <h1 class="text-center">List of users</h1>
    <div class="container mt-5">
        <button class="btn btn-primary mb-5"><a href="crud.php" class="text-light">Add User</a></button>

    <!-- table view -->
    <table class="table">
    
  <thead>
    <tr>
      <th scope="col">S.l No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql="Select * from crud";
        $result=mysqli_query($conn,$sql);
 
        if($result){
           while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];

                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-primary"><a class="text-light" class="update.php" class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text-light" class="delete.php" class="text-light" href="delete.php ? deleteid='.$id.'">Delete</a></button>
                </td>
              </tr>';
           }
        }
    ?>
    
  </tbody>
</table>
    </div>
 </body>
</html>