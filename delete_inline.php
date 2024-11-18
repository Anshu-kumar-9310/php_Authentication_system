<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }

    $student_id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','login');
    $sql="DELETE FROM student_record WHERE id='$student_id'";
    if(mysqli_query($con,$sql)){
        header("Location:index.php");
    }
?>
