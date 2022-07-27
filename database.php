 <!-- $con=  mysqli_connect("localhost", "root", "", "fake_beggar");
 // $con=  mysqli_connect("db", "idfb_user", "kJfVqML59kzc8nMS", "idfb");

 if(!$con)
{
    die('not connected');
}  -->

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'fake_beggar');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>