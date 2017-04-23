
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Add Teacher</title>
    <style>
        body   {background-color: #009933;
           }
        
        
        
        input#inputreset {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: orange;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input#inputsubmit {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: #0098cb;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
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

    <div class="container" style="margin-left:400px; padding-bottom: 20px;" >
        <div class="">
            <div class="">
                <div style="margin-top:1em;" class="col-sm-5">
                    <div class="jumbotron"   style=" padding-bottom: 12px">
                        <form role="form" action="add_teacher.php" method="post">
                            <div class="form-group">
                                <label for="name">Teacher Name :</label>
                                <input type="text" class="form-control" required name="tcr_name" id="name"> </div>
                <div class="form-group">
                                <label for="subj">Teacher Subject :</label>
                                <input type="text" class="form-control" required name="tcr_subj" id="subj"> </div>


                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" required name="tcr_email" id="email"> </div>

                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" required name="tcr_pwd" id="pwd">
                                <br> </div>
                                <br>
                           <input id="inputreset" type="reset">
                            <input id="inputsubmit" type="submit" type="submit" name="submit" value="Add" style="margin-left:150px">        
                        </form>
                                     
<?php
if(isset($_POST['submit'])){
      $name = $_POST['tcr_name'];
      $subj = $_POST['tcr_subj'];
      $email = $_POST['tcr_email'];
      $pwd = $_POST['tcr_pwd'];
   $submit = "INSERT INTO teacher (name,subject,email,password) values('$name', '$subj', '$email', '$pwd')";
    $run=mysqli_query($con,$submit);
    if($run){
        echo "Teacher Added succesfully";
    }

}

$con->close();
?>            

                                                  
</div>
</div>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>

</html>
