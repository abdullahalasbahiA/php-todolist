<?php



$conn = mysqli_connect("localhost", "root", "", "php-todolist");

if(!$conn){
    echo "Connection problem see db.php file!";
}