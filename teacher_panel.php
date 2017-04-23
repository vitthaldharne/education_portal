
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <title>Teacher Panel</title>
        <style>
            body {
                background-color: #3333FF;
                }
        </style>
    </head>
    
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Teacher Panel </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="read.php">Read </a></li>
        <li class="active"><a href="add_content.php">Add Content </a></li>

        <li class="active"><a href="view_querry.php">View Querries</a></li> 
        <li class="active"><a href="teacher_logout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>



</body>    


</html>
