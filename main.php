<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create.php" method="POST">
Folder name: <input type="text" name="name">
<input type="submit" value="Create">
</form>
</body>

<?php 
$path = ".";
$dir = opendir($path) or die ("Cannot open");
while($file = readdir($dir)){
    if  ($file == "." || $file ==".." || $file =="main.php" || $file =="create.php" || $file =="delete.php" || $file == "delete.png")
    continue;

    echo "<a href='$file'>$file</a><a href ='delete.php?dir=$file'><img src = 'delete.png'></a> <br>";
}
closedir($dir);
?>