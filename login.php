<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Bootstrap Files-->
   
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
     <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
   
    <!--Bootstrap files end here-->
    
</head>

<body style="background-color: #7C1919;width: 100%;height: 100%;" >

  <div class="modal-header" style="background: #570707; height: 50px; width: 100%; padding: 0px; border-bottom: none;">  <!-- for header -->
              
  </div>
  <div class="container"><br>
  <h3 align="center" style="color: white;"><b>LOG IN</b></h3><br><br>
    <center><form method="post" action="login_page.php">
        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="text" class="form-control" size="50px" id="userid" name="userid" placeholder="USER ID" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="password" class="form-control" id="pwd" name="password" placeholder="PASSWORD" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <p>IF NOT AN USER <a href="index.php"><b style="color: white;">SIGN UP</b></a></p>
        </div>
        

        <div class="form-group col-lg-4 col-lg-offset-4">
          <button type="submit" name="submit" class="btn btn-default" style="border-radius: 25px; width: 100px">LOG IN</button>
        </div>

     </form></center>
  </div>
</body>
</html>