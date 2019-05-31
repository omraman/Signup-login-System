
<?php
session_start();
if (isset($_SESSION['uid'])) {
  $stor = $_SESSION['uid'];
}else{
  header("location:login.php");
}

?>




<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <!-- Bootstrap Files-->
   
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
     <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
   
  <!--Bootstrap files end here-->
  <style type="text/css">
    td
    {
      color: white;
    }
  </style>
</head>

<body style="background-color: #7C1919;width: 100%;height: 100%;" >

  <div class="modal-header" style="background: #570707; height: 50px; width: 100%; padding: 0px; border-bottom: none;">  <!-- for header -->
      <h6 align="right"><a href="logout.php" style="color: white;">LOG OUT</a></h6>
  </div>
  <div class="container"><br>
  <h3 align="center" style="color: white;"><b>WELCOME TO HOMEPAGE</b></h3><br><br>

<?php
  $con = mysqli_connect('localhost','root','','task_signup');
$qry = "SELECT * FROM `register` WHERE `mail`='$stor'";
$run = mysqli_query($con,$qry);
if($fetch = mysqli_fetch_assoc($run))
  {
    $file001=$fetch['excel']
    ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-block">
                <table  class="table">
                  <tr>
                    <th style="color: white;">NAME</th>
                    <td><?php echo strtoupper($fetch['username']);?></td>
                    <td></td>
                  </tr>

                  <tr>
                    <th style="color: white;">USER ID</th>
                    <td><?php echo strtolower($fetch['mail']);?></td>
                  </tr>

                  <tr>
                    <th style="color: white;">GENDER</th>
                    <td><?php echo strtoupper($fetch['gender']);?></td>
                  </tr>

                  <tr>
                    <th style="color: white;">VIEW FILE</th>
                    <td><button style="color: black;"><a href="<?php echo 'excel/'.$file001;?>">VIEW</a></button></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <img src="image/<?php echo $fetch['image'];?>" height="180" width="180" style="border-radius: 50%;" class="img-responsive img-circle">
          </div>
        </div>
      </div>
    </section>

     <?php

}

?> 
    </div>
  <div class="col-lg-3 col-md-4 col-xs-3" style="margin-top: 70px;">
    
  </div>
</div>
</div>
</div>s
</body>
</html>
