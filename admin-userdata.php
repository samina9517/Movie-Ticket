<?php
include("includes/header.php");
include("includes/config.php");
session_start();
$name=$_SESSION['name'];
if (isset($name)) {
  $result=mysqli_query($con,'SELECT id,name,contact,mail,atime,dob,mname,price,seatno FROM ticket');
  $row=mysqli_num_rows($result);
echo "<div class='container'>" ;
echo "<h3></br> Welcome to Admin Panel</h3>";
echo "Total registered users : $row";
echo "<a href='admin-logout.php'><button class='btn btn-primary'style='float:right;'>Logout</button></a>";
echo "</br></br>";
echo "<table class='table table-striped table-border table-responsive'>";
echo "<tr align='center'>";
echo "<th>S.no</th>";
echo "<th>Name</th>";
echo "<th>Contact</th>";
echo "<th>Email</th>";
echo "<th>Date</th>";
echo "<th>Show Time</th>";
echo "<th>Movie Name</th>";
echo "<th>Ticket Price</th>";
echo "<th>Seatno</th>";
echo "<th>Delete</th>";
echo "</tr>";
$i=0;
while ($retrive=mysqli_fetch_array($result)) {
  $id=$retrive['id'];
  $name=$retrive['name'];
  $phone=$retrive['contact'];
  $mail=$retrive['mail'];
  $day=$retrive['dob'];
  $stime=$retrive['atime'];
  $moviename=$retrive['mname'];
  $buy=$retrive['price'];
  $seat=$retrive['seatno'];
  echo "<tr align='center'>";
  echo "<th>".$i=$i+1;"</th>";
  echo "<th>$name</th>";
  echo "<th>$phone</th>";
  echo "<th>$mail</th>";
  echo "<th>$day</th>";
  echo "<th>$stime</th>";
  echo "<th>$moviename</th>";
  echo "<th>$buy</th>";
  echo "<th>$seat</th>";
  echo "<th><a href='del2.php?del2=$id'>
  <button class='btn btn-danger'>Delete</th><button></a></th>";
  echo "</tr>";
}
echo "</table>";
}else{
  header("location : admin.php");
}
 ?>
