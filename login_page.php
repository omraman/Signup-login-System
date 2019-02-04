<?php

$con=mysqli_connect('localhost','root','','task');
  
if(isset($_POST['submit']))
{
  $mail=$_POST['userid'];
  $password=$_POST['password'];

  $sql="SELECT * from register where mail='$mail' and password='$password'";
  $query=mysqli_query($con,$sql);
  $rw=mysqli_num_rows($query);
  if($rw>0)
  {
    
    session_start();
    $_SESSION['uid']=$mail;
    header('location: home.php');
    



  }
  else
  {
    header('location:login.php');
  }


}
?>