<?php
include("includes/header.php");
include("includes/config.php");
session_start();
$msg='';$msg2='';$fname='';
if (isset($_POST['submit'])) {
  $fname=$_POST['name'];
  $password=$_POST['pass'];
  if (empty($fname)) {
    $msg='<div class="error">Please enter your Name</div>';
  }
  elseif (empty($password)) {
    $msg2='<div class="error">Please enter your Password</div>';
  }
  else
  {

  $pass=mysqli_query($con,"SELECT pass FROM admin WHERE name='$fname'");
  $pass_w=mysqli_fetch_array($pass);
  $dpass=$pass_w['pass'];
  if($password!==$dpass)
  {
      $msg2='<div class="error">Wrong password</div>';
  }
  else {
    $_SESSION['name']=$fname;
    header("location: admin-panel.php ");
  }

  }
}
 ?>
 <title>Admin login</title>
 <style type="text/css">
   .error{
     color: red;
   }
   #body-bg{
     background: url("images/bg.png")

   }
 </style>
</head>
<body id="body-bg">
  <div class="container">
    <div class="login-form col-md-4 offset-md-4">
      <div class="jumbotron" style="margin-top:50px;padding-top:20px;padding-bottom:10px;">
        <h2 allign ='center'>Admin Login :</h2><br>
        <form method="post">
          <div class="form-group">
            <label>Username : </label>
            <input type="text" name="name" class="form-control" placeholder="Username" value="<?php echo $fname ?>">
            <?php echo $msg; ?>
          </div>
          <div class="form-group">
            <label>Password : </label>
            <input type="password" name="pass" placeholder="Password" class="form-control">
            <?php echo $msg2;  ?>
          </div>

          <div class="form-group">
          <center> <input type="submit" name="submit" value="Login" class="btn btn-success" />
          </center>
          </div>
        </form>

      </div>

    </div>

  </div>
</body>
