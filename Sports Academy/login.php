<?php
    
   $servername = "localhost";  
   $username = "root";  
   $password = "";  
     $database_name = "sport";  
      
    $conn =  new mysqli($servername, $username, $password, $database_name); 
    if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);  
}
echo "Connected successfully"; 

  if(isset($_POST['log']) )
   {
       $eml=$_POST['email'];
       $psw=$_POST['pass'];
       $sql=mysqli_query($conn, "SELECT * FROM signup WHERE email='$eml' and pass='$psw'"); 
       if($row=mysqli_fetch_array($sql))
       {
    
           if($psw==$row['pass'])
           {
               $sql1="INSERT INTO login1(email,pass) VALUES('$eml','$psw')";
               if($conn->query($sql1)==TRUE)
               {
                   header("location:sports.html");
                   
               }
               else{
                   echo "Error:" .$sql1 ."<br>" . $conn->error;
               }  $conn->close();
           }
       }
   }

  
?> 