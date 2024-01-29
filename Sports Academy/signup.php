<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$moname=$_POST['moname'];
$faname=$_POST['faname'];
$pass=$_POST['pass'];
$add1=$_POST['add1'];
$coun=$_POST['coun'];
$state1=$_POST['state1'];
$pin=$_POST['pin'];
$land=$_POST['land'];
$mob=$_POST['mob'];
$fanum=$_POST['fanum'];
$monum=$_POST['monum'];
$email=$_POST['email'];
$edu=$_POST['edu'];
$past=$_POST['past'];
$achiv=$_POST['achiv'];



$servername="localhost";
$username="root";
$password="";
$database_name="sport";
$conn= new mysqli($servername,$username,$password,$database_name);
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);  
}
echo "Connected successfully";

if($result = $conn->query("SELECT * FROM signup where email='$email'")){
    $row_cnt = $result->num_rows;
    if($row_cnt == 0)
    {
        
        $sql="INSERT INTO signup(fname,mname,lname,dob,gen,moname,faname,pass,add1,coun,state1,pin,land,mob,fanum,monum,email,edu,past,achiv)
        VALUES(' $fname',' $mname','$lname','$dob','$gen','$moname','$faname','$pass','$add1','$coun','$state1','$pin','$land','$mob','$fanum','$monum','$email','$edu','$past','$achiv')";

        $sql2 = "INSERT INTO login1(email,pass) VALUES ('$email','$pass')";

        if($conn->query($sql)==TRUE && $conn->query($sql2)==TRUE)
        {
            echo "New Details Entry Inserted successfully !";
            header("location:sports.html");
        }
        else
        {
        echo "error:" .$sql ."<br>". $conn->error;
        }

    }
    else{
        echo "you are already registered!!!";
    }
}






$conn->close();

?>
