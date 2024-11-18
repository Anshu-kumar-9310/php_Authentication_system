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
    <title>delete record </title>
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
        
        <div class="main">
           <h2>Delete Record </h2>
           <div class="data">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <label for="">Id</label>
                    <input type="text" name="sid" id=""><br>
                    <input type="submit" value="Delete" name="search" class="search"><br>
        <?php
             if(isset($_POST['search'])){
                $con=mysqli_connect('localhost','root','','login');
                $student_id=$_POST['sid'];
                $sql="DELETE FROM student_record WHERE id='$student_id'";
                if(mysqli_query($con,$sql)){
                    echo "<h3 style='color:white;margin:20px;padding:10px;background-color:green;display:inline:block;'>RECORD DELETE SUCCESSFULLY</h3>";
                }
            }
        ?>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>