<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$class=$_POST['class'];
$how=$_POST['how'];
$msg1=$_POST['msg1'];

$servername="localhost";
$username="root";
$password="";
$db_name="sport";

$conn=new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}
echo"Connection Successfull";
$sql="INSERT INTO contact(fname,email,mob,class,how,msg1) VALUES('$fname','$email','$mob','$class','$how','$msg1')";
if($conn->query($sql)==TRUE)
{
    echo"Details Inserted Successfully!!!";
}
else
{
    echo"error:" .$sql . "<br>". $conn->error;
}




?>