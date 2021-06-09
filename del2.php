<?php
include('includes/config.php');
$id=$_GET['del2'];
mysqli_query($con,"DELETE FROM ticket WHERE id='$id'");
header('location:admin-userdata.php');
 ?>
