<?php
session_start();
include 'conn.php';
if(!isset($_SESSION['username'])){  //---work?
  // 
    header('location:login.php');
}


if(isset($_POST['done'])){
   // $id = $_POST['id'];
    $Question = $_POST['Question'];
    $uid = $_SESSION['id'];    //---work?         WHY ID IS 0 ON displayQuestions.php page.
   $date = date("Y/m/d");
    $q ="INSERT INTO `questions`(`date`,`Question`,`uid`,`Status`) VALUES ('$date','$Question','$uid','0')";
    $query = mysqli_query($con,$q);
    header('location:displayQuestions.php');            
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
 <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
    </head>
    <body>
        
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">ASK SAPTHAGIRI</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="displayAllQuestions.php">View All Question</a></li>
      <li><a href="displayQuestions.php">View Asked Question</a></li>
      <li><a href="displayAnswers.php">View Answers</a></li>
        <li><a href="index.php">Logout</a></li>
      
    </ul>
  </div>
</nav>
        
        <div class="col-lg-6 m-auto">
            <form method="post">
                <br>
                <br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center"> Questions</h1>
                    </div>
                    <br>    
                    <label>Question:</label>
                    <input type="text" name="Question" class="form-control">
                    <br>
                    
                    <button class="btn btn-success" type="submit" name="done">Ask the community</button>
                    <br>        
            </form>
        </div>
    </body>
</html>