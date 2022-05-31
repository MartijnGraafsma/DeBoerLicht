<?php
$servername="localhost";
$username="root";
$password="";
$db="boerdelicht";

$conn= new mysqli($servername, $username, $password, $db);
if(!$conn){
    die("Error on the Connection" . $conn->connect_error);
}
?>