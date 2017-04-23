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
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    
     <style>
         body {
             background-color: #99FF66;
         }
         
         button {
             margin-left: 6em;
         }
         
          input#reset {
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
        
        input#submit {
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
             <a class="navbar-brand" href="#">Student Panel</a> </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="read.php">Read</a></li>
                <li class="active"><a href="view_answer.php">View Answers</a></li>
                <li class="active"><a href="ask_querry.php">Ask Question</a></li>
                
                <li class="active"><a href="student_logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
   
  <div style="margin-left: 460px; " class="container">
      <div>
      <div  class="col-sm-4">
      
       <form role="form" action="ask_querry.php" method="post">
        <div class="form-group">
    <label for="name">Subject Name :</label>
    <input type="text" class="form-control" id="name" required name="sub_name" placeholder="enter subject name">
    
   <br>
 <div class="form-group">
  <label for="address">Ask Question:</label>
  <textarea class="form-control" rows="10" id="subject_data" required name="sub_que" placeholder="enter Question here"></textarea>
</div>
  
   <input type="reset" id="reset">
  <input style="margin-left:10em;" type="submit" name="submit" value="Add " id="submit">

</div>

</form>
  
  <!-- Php part work here --> 
   <?php
if(isset($_POST['submit'])){
    
$name = $_POST['sub_name'];
$querry = $_POST['sub_que'];

    
   $submit = "INSERT INTO querry (name, querry) VALUES('$name', '$querry')";
    $run=mysqli_query($con,$submit);
    if($run){
        echo "Question Added succesfully";
    }

}

$con->close();
?>   
   
<!-- Php part work here --> 

    
      </div>
      </div>
  </div>
   
   
   
   
    </body>
    
</html>