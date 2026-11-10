<?php

$host = "localhost";
$user = "root";
$password = "";
$name = "part2";

$conn = new mysqli($host, $user, $password, $name);

if($conn->connect_error){
    die("Error: ". $conn->connect_error);
}