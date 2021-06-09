<?php
include("includes/header.php");
include("includes/config.php");
session_start();
$name=$_SESSION['name'];
if (isset($name)) {
  $result=mysqli_query($con,'SELECT id,movie_name,time_slot,ticket_price FROM movie');
  $row=mysqli_num_rows($result);
echo "<div class='container'>" ;
echo "<h3></br> Welcome to Admin Panel</h3>";
echo "Total registered users : $row";
echo "<a href='admin-logout.php'><button class='btn btn-primary'style='float:right;'>Logout</button></a>";
echo "<a href='admin-userdata.php'><button class='btn btn-primary'style='float:right;margin-right:3px;'>Customer Database</button></a>";
echo "</br></br>";
echo "<table class='table table-striped table-border table-responsive'>";
echo "<tr align='center'>";
echo "<th>S.no</th>";
echo "<th>Movie Name</th>";
echo "<th>Time Slot</th>";
echo "<th>Ticket Price</th>";
echo "<th>Delete</th>";
echo "<th>Insert</th>";
echo "</tr>";
$i=0;
while ($retrive=mysqli_fetch_array($result)) {
  $id=$retrive['id'];
  $moviename=$retrive['movie_name'];
  $time=$retrive['time_slot'];
  $price=$retrive['ticket_price'];
  echo "<tr align='center'>";
  echo "<th>".$i=$i+1;"</th>";
  echo "<th>$moviename</th>";
  echo "<th>$time</th>";
  echo "<th>$price</th>";
  echo "<th><a href='delete-admin.php?del=$id'>
  <button class='btn btn-danger'>Delete</th><button></a></th>";
  echo "<th><a href='insert.php?user=$id'>
  <button class='btn btn-success'>Insert</th><button></a></th>";
  echo "</tr>";
}
echo "</table>";
}else{
  header("location : admin.php");
}
 ?>
