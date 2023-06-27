<?php
     include("connect.php");
     $id=$_GET['updateid'];
     $sql="select * from crud where id=$id";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);
     
     $name=$row['name'];
     $email=$row['email'];
     $mobile=$row['mobile'];
     $password=$row['password'];


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
    

    $sql="update crud set name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    //echo $sql; exit;
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "data updated successfully";
        header("location:display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <h1 class="text-center">Crud</h1>
        <div class="container">
            <form method="post">
           
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value=<?php echo $name;?> class="form-control" id="exampleInputName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" value=<?php echo $email;?> class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" value=<?php echo $mobile;?> class="form-control" id="exampleInputMobile" placeholder="Enter your mobile no">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value=<?php echo $password;?> class="form-control" id="exampleInputPassword1" placeholder="Enter the Password">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>