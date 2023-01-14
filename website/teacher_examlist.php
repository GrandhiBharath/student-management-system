<?php
  session_start();
  require_once("config/db.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="examslist.css">
    <title>ExamsList</title>
</head>
<body>
  <div class="bg-image">
  </div>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Vignan_logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">  
            </a>
            <h2 id="colour"> VIGNAN INSTITUTE OF TECHNOLOGY AND SCIENCE</h2>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li id="navlist" class="nav-item">
                <a id="colour" class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li id="navlist" class="nav-item">
                <a id="colour" class="nav-link" href="#">About</a>
              </li>
              <li id="navlist" class="nav-item">
                <a id="colour" class="nav-link" href="login.php">Log In </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div>
      
      <div id="examlist">
        <center>
           <button style="margin-right: 50px;" class="button button1"><a style="color: black;"href="teacher_unit1.php"> UNIT TEST-1</a></button>
           <button  style="margin-right: 50px;"class="button button2"><a style="color: black;"href="teacher_unit2.php">UNIT TEST-2</a> </button> 
           <button style="margin-right: 50px;" class="button button3"><a style="color: black;"href="teacher_midexam-1.php">MID EXAM-1</a> </button> 
           <button  style="margin-right: 50px;"class="button button4"><a style="color: black;"href="teacher_unit3.php">UNIT TEST-3</a> </button> 
           <button  style="margin-right: 50px;"class="button button5"><a style="color: black;"href="teacher_unit4.php">UNIT TEST-4</a> </button>  
           <button style="margin-right: 50px;" class="button button3"><a style="color: black;"href="teacher_midexam-2.php">MID EXAM-2</a> </button>
        </center>
        
      </div>
    
    </div>
    
   </div>



   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
    