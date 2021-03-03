<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "item";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn){
    die("kkkk".mysqli_connect_error());
}
?>