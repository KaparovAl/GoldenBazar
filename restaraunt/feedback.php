<?php
 require_once('db.php');
$name = $_POST['name']; 
$number = $_POST['number']; 
$sql = "INSERT INTO users (name, number) VALUES ('$name', '$number')";
$conn -> query($sql);

?>
