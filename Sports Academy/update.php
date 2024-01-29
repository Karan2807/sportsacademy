<?php
if(isset($_POST["update"]))
{
    $em=$_POST["email"];
    $pa=$_POST["pass"];
    $newp=$_POST["newpassword"];
    
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
    $sql = "UPDATE signup SET pass='$newp' where email='$em' and pass='$pa' ";
            if ($conn->query($sql) === TRUE) {
                    echo "Password successfully Updated";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } 

    

?>

