<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <!-- Bootstrap Files-->   
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
  <!--Bootstrap files end here-->
    <script>
      
      function validate()
      {
        if(!document.getElementById("pass").value==document.getElementById("repass").value) alert("Passwords do no match");
        return document.getElementById("pass").value==document.getElementById("repass").value;
        return false;
      }
    </script>

    <style type="text/css">
     
    </style>

    
</head>

<body style="background-color: #7C1919;width: 100%;height: 100%;" >

  <div class="modal-header" style="background: #570707; height: 50px; width: 100%; padding: 0px; border-bottom: none;">  <!-- for header -->
              
  </div>
  <div class="container"><br> 
  <h3 align="center" style="color: white;"><b>REGISTER FORM</b></h3>
    <table>
      
      <form onSubmit="return validate()" method="post" action="insert.php" enctype="multipart/form-data">       
        
        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="text" class="form-control" id="username" name="username" placeholder="NAME" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="text" class="form-control" id="userid" name="userid" placeholder="USER ID" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="email" class="form-control" id="mailid" name="mailid" placeholder="MAIL ID" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <select class="form-control" name="gender" placehoder="GENDER" required>
            <option selected="hidden" value"">GENDER</option>
            <option value="male">MALE</option>
            <option value="female">FEMALE</option>
        </select>          
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4 ">
          <label class="form-control">UPLOAD IMAGE<input type="file" name="img5" class="form-control" style="visibility: hidden;" accept="image/*" id="image"  placeholder="UPLOAD IMAGE" required></label>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <label class="form-control">UPLOAD EXCEL FILE ONLY*<input type="file" name="excel1" class="form-control" accept=".xls,.xlsx/*" style="visibility: hidden;" id="excel" required></label>
        </div>        

        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="password" class="form-control" id="pass" name="pass" placeholder="PASSWORD" required>
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <input type="password" class="form-control" id="repass" name="repass" placeholder="RETYPE PASSWORD" required>   
        </div>

        <div class="form-group col-lg-4 col-lg-offset-4">
          <textarea class="form-control" rows="4" id="message" name="message" placeholder="MESSAGE"></textarea>
        </div>        

        <div class="form-group col-lg-4 col-lg-offset-4">
          <p style="font-weight: bold;" align="right">Already a user ! <a href="login.php"><b style="color: white;">SIGN IN</b></a></p>
        </div>        

        <div class="form-group col-lg-4 col-lg-offset-4">
          <center><button type="submit" name="submit" class="btn btn-default " style="border-radius: 25px; width: 120px;">SAVE</button></center>
        </div>
      </form>
    </table>
  </div>
</body>
</html>
