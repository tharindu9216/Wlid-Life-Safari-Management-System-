<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wilds";

$connection = new mysqli ($servername, $username, $password, $dbname);

if($connection->connect_error){

    die("connection failed :" .$connection->connect_error);
}
echo "conneted";

?>