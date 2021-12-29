<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logged Out</h1>
<?php
new mysqli('localhost','root','','prj2');
echo "you are logged out";
header("location: http://localhost/project2/prj2signin.php");
?>
</body>
</html>