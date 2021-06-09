<?php
include("includes/config.php");
include("includes/header.php");
$db = mysqli_connect('localhost', 'root', '', 'project');
 ?>
    <meta charset="utf-8">
    <title>Star cineplex</title>
    <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="css/bootstrap.css" style="text/css">
  </head>

  <body id="bg">
    <style type="text/css">
    .header-section{

 }
 .container2{
  height:65px;
 }
 .container2 nav{
 }
 .container2 nav ul {
  font-size:20px;
  font-style:oblique;
  font-weight:700;
 }
 .container2 nav ul li{
  list-style: none;
 }
 .container2 nav ul li a{
  text-decoration: none;
  float: left;
  padding:15px;
  margin-right:40px;
  color: #292947;
 }
 .container2 nav ul li a:hover{
  color: #e75425;
  border-width: 2px;
 }
    </style>
    <section class="header-section">
      <div class="container2">
        <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="star.php">Star Cineplex</a></li>
          <li><a href="shaymoli.php">Shyamoly Square</a></li>
          <li><a href="blockbuster.php">Blockbuster Movies</a></li>
          <li><a href="admin.php">Admin</a></li>
        </ul>
        </nav>
      </div>
    </section>
    <div class="banner">
      <center><h2 >BLOCKBUSTER MOVIES</h2></center>
      </div>
    <div class="box">
      <h2 >Ongoing Movies</h2>

    </div>
  <table class="table table-striped">
    <thead>
    <tr style="font-size:20px;font-weight:bolder;font-style:oblique;">

      <td>Movie Name </td>
      <td>Time Slot</td>
      <td>Ticket Price</td>
    </tr>
  </thead>
  <ul class="list">
    <?php
    $query = "SELECT * FROM movie order by id desc" ;
    $results = mysqli_query($db, $query);
    while ($list = mysqli_fetch_assoc($results)) {
      ?>
  </ul>
    <tbody>
    <tr>
      <td> <a href="signup.php?id=<?php echo $list['id']?>"style="color: Green ;font-style:oblique;font-family: sans-serif;font-size:25px;"> <?php echo $list['movie_name']; ?></a><?php
    ?></td>
      <td> <a href="signup.php?id=<?php echo $list['id']?>"style="color: Orange;font-style:bold;font-family: sans-serif;font-size:25px;"> <?php echo $list['time_slot']; ?> </a><?php
    ?></td>
      <td> <a href="signup.php?id=<?php echo $list['id']?>"style="color: purple;font-style:oblique;font-family: sans-serif;font-weight: bolder;font-size: :30px;"> <?php echo $list['ticket_price']; ?> </a><?php
  }  ?></td>

    </tr>

    </tbody>
  </table>
  </body>
</html>
