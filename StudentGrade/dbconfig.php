<?php

$host="localhost";
$user="root";
$password="";
$db="studentgrade";


$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
    echo "check your connection";
}
?>