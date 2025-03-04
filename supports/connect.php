<?php
$host="localhost";
$user="root";
$password="";
$db="mystore";
$conn=mysqli_connect($host,$user,$password,$db);
if($conn){
    echo"";}
    else{
        echo"connection unsuccessfull";
    }


?>
