<?php
$host = "localhost"; // Replace with your MySQL server hostname (e.g., "localhost")
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "db_module_6"; // Replace with the name of your MySQL database

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

if(!$connection){
    die('Connection Failed'. mysqli_connect_error());
}

$connection->set_charset("utf8");

?>