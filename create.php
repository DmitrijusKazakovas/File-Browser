<?php 
$dir = $_POST['name'];
mkdir($dir);
header("location: main.php");
?>