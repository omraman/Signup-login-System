<?php
  //create connection
  $con = mysqli_connect('localhost','root','','task');
  if (isset($_POST['submit']))
  {
  
   $username = $_POST['username'];
   $user = $_POST['userid'];
   $mail = $_POST['mailid'];
   $gender = $_POST['gender'];
   $password = $_POST['pass'];
   $message = $_POST['message'];

   $name = $_FILES['img5']['name'];
   $tmp_name = $_FILES['img5']['tmp_name'];
   $path= 'image/';
   move_uploaded_file($tmp_name, $path.$name); 

   $ex = $_FILES['excel1']['name'];
   $tmp_name = $_FILES['excel1']['tmp_name'];
   $path1= 'excel/';
   move_uploaded_file($tmp_name, $path1.$ex); 
       

  $sql = "INSERT INTO `register`(`username`, `userid`, `mail`, `gender`, `image`, `excel`, `password`, `message`) VALUES ('$username','$user','$mail','$gender','".$name."','".$ex."','$password','$message')";

   
   if(mysqli_query($con,$sql))
   {
     echo "inserted";
   }
   header('location:login.php');

  }   
 
?>