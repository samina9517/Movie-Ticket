<?php
include("includes/config.php");
include("includes/header.php");
$cinema='';$watchtime='';$credit='';   $mname='';$shomoy='';$daam='';
$id=$_GET['user'];
if (isset($id)) {
  // code...

$result=mysqli_query($con,"SELECT movie_name,time_slot,ticket_price FROM movie WHERE
id= '$id'"  );
$retrive=mysqli_fetch_array($result);
$cinema=$retrive['movie_name'];
$watchtime=$retrive['time_slot'];
$credit=$retrive['ticket_price'];
if (isset($_POST['submit'])) {
  // code...

//$image=$_FILES['image']['name'];
echo "done";

  $tasvire= $_POST['newm'];
  $waqt=$_POST['newt'];
  $paisa=$_POST['newp'];


     mysqli_query($con,"UPDATE movie SET
       movie_name='$tasvire',time_slot='$waqt',ticket_price='$paisa', WHERE id='$id'");
       /*mysqli_query($con,"INSERT INTO posts (subject,content,date) VALUES
       ('".$_POST["movie_name"]."', '".$_POST["time_slot"]."','".$_POST["ticket_price"]."')");*/
       header("location:admin-panel.php");

 }
}


 ?>
<title>Update user</title>
</head>
<style type="text/css">
#body-bg{
  background: url("images/bg.png")

}
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
      <h3 align='center'> Update user details</h3><br>
      <form method="post" >
        <div class="form-group">
        <label>Movie Name :</label>
        <input type="text" name="newm"placeholder="Movie Name" class="form-control" value="<?php echo $cinema; ?>">
      </div>
      <div class="form-group">
      <label>Time Slot:</label>
      <input type="text" name="newt"placeholder="time " class="form-control"value="<?php echo $watchtime; ?>">

      </div>
      <div class="form-group">
      <label>Price :</label>
      <input type="text" name="newp"placeholder="price" class="form-control"value="<?php echo $credit; ?>">

      </div>


      <div class="form-group">


     <br>
      <center><input type="submit" name="submit" value="Update" class="btn btn-success"> </center>
      </form>

    </div>

  </div>

</div>

</body>
</html>
