<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'feedback';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    mysqli_connect_error();
}
else{
    'успех';
}
?>  