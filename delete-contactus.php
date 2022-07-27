<?php
include_once 'database.php';
$sql = "DELETE FROM contact_us WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    // echo "Record deleted successfully";
    header("location: contact_us.php");
} 
// else {
//     echo "Error deleting record: " . mysqli_error($link);
// }
mysqli_close($link);
?>