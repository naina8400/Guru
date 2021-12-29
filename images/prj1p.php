
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
//Database connection
$conn=new mysqli('localhost','root','','prj1');
if($conn->connect_error){
 die('connection failed :'.$conn->connect_error);
}
else{
    $stmt =$conn->prepare("insert into prj1form(name,email,phone,message) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$phone,$message);
    $stmt->execute();
    echo "registerd Successfully";
    $stmt->close();
    $conn->close();
}
?>
