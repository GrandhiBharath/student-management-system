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
    <link rel="stylesheet" href="student.css">
    <title>Student</title>
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
    <center>
        <div id="head">
            <h2>Get your Exam List</h2>
        </div>
    </center>
    <div>
        <form method="POST" action="process.php">
            <div id="options">
                <label for="branch"> Choose your Branch: </label>
                <select name="s_branch" id="branch">
                    <option value=""></option>
                    <option value="cse">CSE</option>
                    <option value="ds">CSE - DS</option>
                    <option value="ai&ds">CSE - AI & DS</option>
                    <option value="ai&ml">CSE - AI & ML</option>
                    <option value="ece">ECE</option>
                    <option value="eee">EEE</option>
                    <option value="eie">EIE</option>
                    <option value="it">IT</option>
                    <option value="mech">MECHANICAL</option>
                    <option value="civil">CIVIL</option>
                    
                </select><br><br>
            </div>
            <div id="options">
                <label for="year"> Choose your Year: </label>
                <select name="s_year"  id="year">
                    <option value=""></option>
                    <option value="1">1st year</option>
                    <option value="2">2nd year</option>
                    <option value="3">3rd year</option>
                    <option value="4">4th year</option>
                </select><br><br>
            </div>
            <div id="options">
                <label for="sem"> Choose your Semester: </label>
                <select name="s_sem"  id="sem">
                    <option value=""></option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>
                </select><br><br><br>
            </div>
            <button name="st_submit">Submit</button>
        </form>
        <?php
        
        ?>
      </div>
       
        






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>