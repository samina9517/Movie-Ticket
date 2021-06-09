<?php
include("includes/config.php");
include("includes/header.php");
$tasvire='';$waqt='';$paisa='';
if (isset($_POST['submit'])) {
  $tasvire= $_POST['newm'];
  $waqt=$_POST['newt'];
  $paisa=$_POST['newp'];

   mysqli_query($con,"INSERT INTO movie
       (movie_name,time_slot,ticket_price)
       VALUES('$tasvire','$waqt','$paisa') ");
       header('location:admin-panel.php');
   }
 ?>
<title>Insert</title>
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
        <input type="text" name="newm"placeholder="Movie Name" class="form-control" value="<?php echo $tasvire; ?>">
      </div>
      <div class="form-group">
      <label>Time Slot:</label>
      <input type="text" name="newt"placeholder="time " class="form-control"value="<?php echo $waqt; ?>">
      </div>
      <div class="form-group">
      <label>Price :</label>
      <input type="text" name="newp"placeholder="price" class="form-control"value="<?php echo $paisa; ?>">
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
