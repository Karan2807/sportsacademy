<?php

$yname=$_POST['yname'];
$ynum=$_POST['ynum'];
$sp=$_POST['sp'];


$servername="localhost";
$username="root";
$password="";
$db_name="sport";

$conn=new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}
echo"Connected Successfully";
$sql="INSERT INTO info(yname,ynum,sp) VALUES('$yname','$ynum','$sp')";
if($conn->query($sql)==TRUE)
{
    echo"Details Inserted Successfully!!!";
}
else
{
    echo "error:" .$sql ."<br>". $conn->error;
}
?>