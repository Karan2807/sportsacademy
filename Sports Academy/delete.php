<?php

if(isset($_POST["delete"]))
{
    $em=$_POST["email"];
    $pa=$_POST["pass"];
    
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="sport";
    $conn= new mysqli($servername,$username,$password,$database_name);
    if ($conn->connect_error)
     {
        die("Connection failed: " . $conn->connect_error);  
    }
    // echo "Connected successfully";
    $sql = "DELETE FROM signup  where email='$em' and pass='$pa' ";
            if ($conn->query($sql) === TRUE) 
            {
                    echo "Account Deleted Successfully";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } 






























?>
