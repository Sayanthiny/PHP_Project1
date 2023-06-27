<?php
    $conn=mysqli_connect("localhost","root","","crudoperations");

    if(!$conn){
       die(mysqli_error($conn));
    }

?>