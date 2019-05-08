<?php
require "header.php";
require "includes/dbh.inc.php";


$id = $_POST['id'];
$user = $_POST['username'];

$sql = "UPDATE users SET uidUsers='$user' WHERE idUsers='$id'";


$send = mysqli_query($conn, $sql);

if($send){
    echo 'User updated';
}else{
    echo("Error description: " . mysqli_error($conn));  
}