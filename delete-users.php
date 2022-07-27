<?php
include_once 'database.php';
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    // echo "Record deleted successfully";
    header("location: users.php");
} 
// else {
//     echo "Error deleting record: " . mysqli_error($link);
// }
mysqli_close($link);
?>