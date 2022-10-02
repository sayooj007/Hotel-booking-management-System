<?php
//Start the session
session_start(); 


//Create constants to store non repeating values.
//define('SITEURL ','http://localhost/Project/Homepage/'); 
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','bluediamond');

//3.Execute the query and save data into the database.
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());//Database Connection
$db_select=mysqli_select_db($conn,DB_NAME)or die(mysqli_error());//Selecting database 

?>