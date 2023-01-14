<?php
  session_start();
  require_once("config/db.php");
  
?>
<style>
  #text{
    font-size: 30px;
}
table{
    margin-top: 150px;
}
.card{
    margin-left: 150px;
}
#box{
    
    padding-bottom: 200px;
}
#navlist{
    padding-left: 100px;
    
}
.navbar-custom {
    background-color:  	#7393B3;
}
#colour{
    color: black;
}
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <title>Login</title>
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
    
      
    <div id="box">
        <table>
            <tr>
                <td>
                    <div class="card">
                        <div style="background-color: rgb(230, 91, 11);" class="card-header">
                           <img src="https://thumbs.dreamstime.com/b/teacher-concept-illustration-icon-isolated-white-background-simple-vector-logo-teacher-concept-illustration-icon-isolated-181941315.jpg" alt="" style="width: 100px; height: 75px"> 
                           <b id="text"> HOD Login </b>  
                        </div>
                        <div class="card-body">
                          <form method="post" action="process.php">
                            <label for="name">  User ID: </label>
                            <input type="username" name="h_username" placeholder="Username" required ><br><br>
                            <label for="password"> Password: </label>
                            <input type="password" name="h_password" placeholder="Password" required ><br><br>
                            <center> <button name="h_submit"> Log In </button> </center>
                          </form>
                        </div>
                      </div>
                </td>
                <td>
                    <div class="card">
                        <div style="background-color: rgb(176, 235, 235);" class="card-header">
                            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/logo-design-template-35b0a3e2315d19a46c046165f315b000.jpg?ts=1592240511" alt="" style="width: 100px; height: 75px">
                          <b id="text"> Student Login </b>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="process.php">
                                <label for="username">  User ID: </label>
                                <input type="username" name="s_username" placeholder="Username"  required><br><br>
                                <label for="password"> Password: </label>
                                <input type="password" name="s_password" placeholder="Password" required><br><br>
                                <center> <button name="s_submit"> Log In </button> </center>
                              </form>
                        </div>
                      </div>
                </td>
                <td>
                    <div class="card">
                        <div style="background-color: rgb(19, 238, 19);" class="card-header">
                           <img src="https://thumbs.dreamstime.com/b/teacher-concept-illustration-icon-isolated-white-background-simple-vector-logo-teacher-concept-illustration-icon-isolated-181941315.jpg" alt="" style="width: 100px; height: 75px"> 
                           <b id="text"> Teacher Login </b>  
                        </div>
                        <div class="card-body">
                          <form method="post" action="process.php">
                            <label for="name">  User ID: </label>
                            <input  type="username" name="t_username" placeholder="Username" required><br><br>
                            <label for="password"> Password: </label>
                            <input type="password" name="t_password" placeholder="Password" required><br><br>
                            <center> <button name="t_submit"> Log In </button> </center>
                          </form>
                        </div>
                      </div>
                </td>
            </tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>