<?php
include_once '../database.php';

$sql = "UPDATE donation SET status=0 WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    // echo "Record updated successfully";
    header("location: volunteer.php");
} 

mysqli_close($link);
?>