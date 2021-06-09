<?php
include("includes/config.php");
include("includes/header.php");
$msg ='';$msg2 ='';$msg3 ='';$msg4 ='';$msg5 ='' ;$msg6 ='';$msg7 ='';$msg8 ='';$msg9 ='';$price='';$email='';
$contact='';$atime='';$date='';$mname='';$name='';
if (isset($_POST['submit'])) {
  $name= $_POST['name'];
  $contact=$_POST['contact'];
  $email=$_POST['mail'];
  $date=$_POST['dob'];
  $atime=$_POST['atime'];
  $mname=$_POST['mname'];
  $price=$_POST['price'];
/*  $price=$_POST['price'];*/

  $seatno=$_POST['seatno'];
   //$password."</br>". $c_password."</br>". $image."</br>". $checkbox.;
   if(empty($name)){
     $msg="<div class='error'>Use at least 3 characters</div>";
   }
   elseif (empty($contact)) {
     $msg2="<div class='error'>Please enter your address</div>";
   }
   elseif (empty($seatno)) {
     $msg3="<div class='error'>Please enter your seat no</div>";
   }

   else{
        mysqli_query($con,"INSERT INTO ticket
          (name,contact,mail,atime,dob,mname,price,seatno)
          VALUES('$name','$contact','$email','$date','$atime','$mname','$seatno') ");
          $msg9="<div class='success'><center> You are successfully registered </center></div>";
            }

 }

 ?>
<style type="text/css">

.error{
  color: red;
}
.success{
  color :green;
  font-weight: bold;
}
</style>
<body id="body-bg" >

<div class="container">
  <div class="login-form col-md-4 offset-md-4">
    <div class="jumbotron" style="margin-top : 20px;">
      <h3 align='center'> Sign Up Form</h3><br>
      <?php echo $msg9;?>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label>Name :</label>
        <input type="text" name="name"placeholder="Name" class="form-control">
        <?php echo $msg;?>
      </div>
      <div class="form-group">
      <label>Contact :</label>
      <input type="text" name="contact"placeholder="123...." class="form-control"value="<?php echo $contact; ?>">
      <?php echo $msg2;?>
      </div>
      <div class="form-group">
      <label>Email :</label>
      <input type="email" name="mail"placeholder="Your email" class="form-control"value="<?php echo $email; ?>">
      <?php echo $msg3;?>
      </div>
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'project');
      $id = $_GET['id'];
      $query = "SELECT * FROM movie WHERE id=$id" ;
      $results = mysqli_query($db, $query);
      $list = mysqli_fetch_assoc($results);
      $price=$list['ticket_price'];

        ?>

      <div class="form-group">
      <label>Date :</label>
      <input type="date" name="dob"class="form-control"value="<?php echo $date; ?>">
      <?php echo $msg4;?>
      </div>

      <div class="form-group">
      <label>Time:</label>
      <input type="text" name="atime"placeholder="<?php echo $list['time_slot']; ?>" class="form-control">
      <?php echo $msg6;?>
      </div>
      <div class="form-group">
      <label>Movie name:</label>
      <input type="text" name="mname"placeholder="<?php echo $list['movie_name']; ?>" class="form-control">
      <?php echo $msg7;?>
      </div>
      <label>Price:</label>
      <div class="form-group">
      <input type="text" name="price"placeholder="<?php echo $list['ticket_price']; ?>" class="form-control">

      <?php echo $msg8 ;?>
     </div>
     <div class="form-group">
       <select name="seatno">
             <option selected disabled hidden>Select Seat</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
           </select>
         <?php echo $msg3;?>
     <br>
      <center><input type="submit" name="submit" value="Submit" class="btn btn-success"> </center>
      </form>

    </div>

  </div>

</div>
</body>
</html>
