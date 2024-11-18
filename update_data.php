<?php
    
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css.css">
</head>
<body class="body">
    <div class="dcontainer">
        <div class="h1">
            <h1>STUDENT'S RECORD</h1>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="Add_student.php">ADD</a></li>
                <li><a href="update.php">UPDATE</a></li>
                <li><a href="delete.php">DELETE</a></li>
                <li><a href="admin.php">ADMIN</a></li>
                <li><a href="login.php">LOG OUT</a></li>

            </ul>
        </div>   
</body>
</html>
<?php

 if(isset($_POST['save'])){
    $hide_id=$_POST['hide_id'];
    $name=$_POST['sname'];
    $add=$_POST['sadd'];
    $gender=$_POST['sgender'];
    $class=$_POST['sclass'];
    $mobile=$_POST['smobile'];

    $con=mysqli_connect('localhost','root','','login');
    $sql2="UPDATE student_record SET s_name='$name', s_address='$add', s_gender='$gender', s_class='$class',s_mobile='$mobile' WHERE id='$hide_id'";
    // mysqli_query($con,$sql) or die("query failed");
     if(mysqli_query($con,$sql2)){
        
        // header("Location:index.php");
        echo "<h2 style='color:white;margin:20px;padding:10px;background-color:green;display:inline:block;text-align:center;'> RECORD UPDATE SUCCESSFULLY </h2>";
    }
       
}
 ?>