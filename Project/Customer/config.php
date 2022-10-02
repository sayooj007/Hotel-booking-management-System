<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "bluediamond";

//create connection to the db
$conn = mysqli_connect($server, $user, $pass, $database);

//check connection
if (!$conn)
{
    die("<script>alert('Connection Failed.')</script>");
}

?>  