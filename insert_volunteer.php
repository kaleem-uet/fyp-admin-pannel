<?php
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $full_name = $_POST['full_name'];
     $cnic = $_POST['cnic'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
    
     $sql = "INSERT INTO volunteer (full_name,cnic,gender,address)
     VALUES ('$full_name','$cnic','$gender', '$address')";
     if (mysqli_query($link, $sql)) {
      // header("location: index.php");
      header("location: volunteer.php");
     } 
   //   else {
   //      echo "Error: " . $sql . ":-" . mysqli_error($link);
   //   }
     mysqli_close($link);
}
?>