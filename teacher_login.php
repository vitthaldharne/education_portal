<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);



 if(isset($_POST['submit'])){ 
                $teacher_email = mysqli_real_escape_string($con,$_POST['teacher_email']); 
                $teacher_password = mysqli_real_escape_string($con,$_POST['teacher_password']); 
                 
                $sel = "select * from teacher where email='$teacher_email' AND password='$teacher_password'"; 
                $run = mysqli_query ($con,$sel); 
                $check_user = mysqli_num_rows($run); 
                 
                if($check_user==0){ 
                    echo "<script>alert('Wrong Email or Password!');</script>"; 
                } else { 
                    $_SESSION['teacher_email']=$teacher_email; 
                    echo "<script>window.open('teacher_panel.php','_self');</script>"; 
                } 
            }

?>


<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> 
   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
	  
		body {
			background-color: #009933;
			margin: 0px;
			padding: 0px;
			font-family: 'Comfortaa',cursive;
		}
		
		input[type="email"], input[type="password"] {
			outline: none;
			padding: 10px;
			display: block;
			width: 300px;
			border-radius: 3px;
			border: 1px solid #eee;
			margin: 20px auto;
		}
		
		input[type="submit"]{
			padding: 10px;
			color: #fff;
			background: #0098cd;
			width: 80px;
			margin: 20px auto;
			margin-top: 0px;
			border: 0px;
			border-radius: 3px;
			cursor: pointer;
			
		}
		
		input[type="reset"]{
			padding: 10px;
			color: #fff;
			background: orange;
			width: 80px;
			margin: 20px auto;
			margin-top: 0px;
			border: 0px;
			border-radius: 3px;
			cursor: pointer;
			margin-left: 420px;
		}
		
	</style>
	</head>
	
	<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="login.php"> Education Portal  </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="read.php">Read </a></li>
        <li class="active"><a href="login.php">Login</a></li> 
      </ul>
    </div>
  </div>
</nav>

		<br>
		<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="page-header" >
            <h1 style="text-align:center;color:blue;" ><a href="#">Teacher Login</a><br></h1>
			</div>
        </div>
    </nav>

</div>
	
	<div class="container">
	<div class="jumbotron">
		 <form action="teacher_login.php" method="post">
	 	<input type="email" placeholder="enter your email" name="teacher_email" autocomplete="off">
	 	<input type="password" placeholder="enter your password" name="teacher_password">
	 	<input type="reset">
	 	<input type="submit" value="Login" name="submit"> 
	 </form>
	</div>
	</div>
		
	</body>
	
	 <script src="js/jquery.min.js"></script>
     <script src="js/jquery.dataTables.js"></script>
</html>
