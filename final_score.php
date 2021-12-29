<?php
$conn=new mysqli('localhost','root','','prj2');
session_start();
echo $_SESSION['score'];
session_unset();
session_destroy();
?>