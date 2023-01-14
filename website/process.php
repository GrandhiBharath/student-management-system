<?php
    session_start();
    require_once("config/db.php");
    if(isset($_POST['s_submit']))
    {
        $_SESSION['s_username']=$_POST['s_username'];
        $_SESSION['s_password']=$_POST['s_password'];
        header('location: student.php');
    }
    if(isset($_POST['h_submit']))
    {
        $_SESSION['h_username']=$_POST['h_username'];
        $_SESSION['h_password']=$_POST['h_password'];
        header('location: HOD.php');
    }
    if(isset($_POST['t_submit']))
    {
        $_SESSION['t_username']=$_POST['t_username'];
        $_SESSION['t_password']=$_POST['t_password'];
        header('location: teachers.php');
    }
    if(isset($_POST['st_submit']))
    {
        $_SESSION['s_branch']=$_POST['s_branch'];
        $_SESSION['s_year']=$_POST['s_year'];
        $_SESSION['s_sem']=$_POST['s_sem'];
        header('location: student_examlist.php');
    }
    if(isset($_POST['hod_submit']))
    {
        $_SESSION['h_branch']=$_POST['h_branch'];
        $_SESSION['h_year']=$_POST['h_year'];
        $_SESSION['h_sem']=$_POST['h_sem'];
        header('location: examslist.php');
    }
    if(isset($_POST['te_submit']))
    {
        $_SESSION['t_branch']=$_POST['t_branch'];
        $_SESSION['t_year']=$_POST['t_year'];
        $_SESSION['t_sem']=$_POST['t_sem'];
        header('location: teacher_examlist.php');
    }

   
  
    




?>
