<?php
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['full_name'];
     $email = $_POST['email'];
     
     $password = $_POST['password'];
    //  $password = md5($password);
    $password = password_hash($password,PASSWORD_BCRYPT);
     $sql = "INSERT INTO staff (username,email,password)
     VALUES ('$name','$email','$password')";
     if (mysqli_query($link, $sql)) {
      header("location: index.php");
     } 
   //   else {
   //      echo "Error: " . $sql . ":-" . mysqli_error($link);
   //   }
     mysqli_close($link);
}
?>