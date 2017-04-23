
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<?php
$query = "SELECT * FROM subject";
$result = mysqli_query($con,$query);
?>

<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> 
    
    <title>View Answers</title>
    <style>
        body {
			background-color:whitesmoke;
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
		
		thead {
			font-family: sans-serif;
			text-align: left;
			font-weight: 700;
			font-size: 17px;
			
		}
		
       
    </style>
</head>

<body>
   
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
             <a class="navbar-brand" href="#">student panel</a> </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="read.php">read</a></li>
                <li class="active"><a href="ask_querry">ask querries</a></li>
                <li class="active"><a href="view_answer">view answer</a></li>
                <li class="active"><a href="student_login.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
  
  <div class="container">
      
   <br><br>
   <div id="divtable" class="container">
      
      <div class="row">
          <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                <td>Subject Name</td>
                <td>Content</td>
               
                </tr>
            </thead>
            
            <?php
    while($row = mysqli_fetch_array($result))
              {
                  echo '
                  <tr>
                  <td>'.$row["name"].'</td>
                    <td>'.$row["data"].'</td> 
                  </tr>
                  ';
              }
              ?>
          
          </table>
      </div>
        
   </div>
  </div>
   

<?php

$con->close();
?>            



 <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/app.js"></script>


</html>
