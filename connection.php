<?php
$host= 'locahost';
$usernm='root';
$pass= 123;
$dbnm='student';
$conn= new mysqli($host,$usernm,$pass,$dbnm);
if($conn->connect_error){
    exit("connection failed:".$conn->connect_error);
} else{
    echo '<script>alert("invalid credentials")</script>';
}




?>