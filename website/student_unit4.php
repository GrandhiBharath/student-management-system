<?php
    require_once("config/db.php");
    require("process.php");
    $id=$_SESSION['s_username'];
    $query= "select * from unit4 where id='$id'";
    $result = mysqli_query($conn,$query);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="student.css">
    <title>UNIT-4</title>
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
    <div class="3-1">
            <table class="table table-bordered text-center">
                <tr class=" display-6 bg-dark text-white">
                    <td>Roll Number</td>
                    <td>CN</td>
                    <td>DAA</td>
                    <td>CD</td>
                    <td>ML</td>
                    <td>IRS</td>
                    <td>IDS</td>
                </tr>
                <tr>
                  <?php
                     $row = mysqli_fetch_assoc($result);
                  ?>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['CN']; ?></td>
                      <td><?php echo $row['DAA']; ?></td>
                      <td><?php echo $row['CD']; ?></td>
                      <td><?php echo $row['ML']; ?></td>
                      <td><?php echo $row['IRS']; ?></td>
                      <td><?php echo $row['IDS']; ?></td>
                  </tr>  
                 

                  
                
            </table>
    </div>

    
   
       
        






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>