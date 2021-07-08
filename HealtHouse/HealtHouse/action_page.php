<?php
   $email =$_POST['email'];


   $host="loacalhost";
   $username="root";
   $psw="password";
   $dbname="test";

   //Database connection

   $conn=new mysqli($host,$username,$psw,$dbname);
   if($conn->connect_error{
      die("Connection Failed :".$conn->connect_error);

   }else{
     $stmt=$conn->prepare("insert into registration(email) values(?)");
     $stmt->bind_param("s",$email);
     $stmt->execute();
     $stmt->bind_result();
     $rnum=$stmt->num_rows;

     if($rnum==0){
       $stmt->close();
       $stmt->$conn->prepare($INSERT);
       $stmt->bind_param("s",$email);
       $stmt->execute();
       echo "Succesfully registered";
     }
     else{
       echo "Someone already subscribed using this email";
     }
     $stmt->close();
     $conn->close();

   }

 ?>
