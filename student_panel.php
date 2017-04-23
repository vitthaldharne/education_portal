
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<!DOCTYPE html>
<html lang="eu">
    <head>
        <title>Student Panel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <style>
        
            body { background-color: #3333FF;
                
                margin-top: -4px;
               
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
                <li class="active"><a href="ask_querry.php">Ask Querry</a></li>
                
                <li class="active"><a href="student_logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
   
    </body>
</html>