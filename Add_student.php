<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location:login.php');
}

    // if(isset($_POST['submit'])){

    //     $name=$_POST['sname'];
    //     $add=$_POST['sadd'];
    //     $gender=$_POST['sgender'];
    //     $class=$_POST['sclass'];
    //     $mobile=$_POST['smobile'];

    //     $con=mysqli_connect('localhost','root','','login');
    //     $sql="INSERT INTO student_record(s_name,s_address,s_class,s_gender,s_mobile) VALUES ('$name','$add','$class','$gender','$mobile')";
    //     // mysqli_query($con,$sql) or die("query failed");
    //     if(mysqli_query($con,$sql)){
    //         header("Location:index.php");
    //     }
       
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new record</title>
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
           <h2>Add New Record </h2>
           <div class="data">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <label for="">Name</label>
                    <input type="text" name="sname" required> <br><br>

                    <label for="">Address</label>
                    <input type="text" name="sadd" required class="address"><br><br>

                    <label for="">Gender</label>
                    <select name="sgender" id="" class="gender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        
                    </select><br><br>


                    <label for="">Class</label>
                    <select name="sclass" id="" class="class">
                        <option value="1" selected>BCOM</option>
                        <option value="2">BSC</option>
                        <option value="3">BA</option>
                        <option value="4">BCA</option>
                        <option value="5">MBA</option>
                    </select><br><br>

                    <label for="">Mobile</label>
                    <input type="text" name="smobile" required class="mobile"><br><br>

                    <input type="submit" value="SAVE" name="submit" class="submit"><br>
                    <?php

                    if(isset($_POST['submit'])){

                        $name=$_POST['sname'];
                        $add=$_POST['sadd'];
                        $gender=$_POST['sgender'];
                        $class=$_POST['sclass'];
                        $mobile=$_POST['smobile'];

                        $con=mysqli_connect('localhost','root','','login');
                        $sql="INSERT INTO student_record(s_name,s_address,s_class,s_gender,s_mobile) VALUES ('$name','$add','$class','$gender','$mobile')";
                        // mysqli_query($con,$sql) or die("query failed");
                        if(mysqli_query($con,$sql)){
                        // header("Location:index.php");
                        echo "<h3 style='color:white;margin:20px;padding:10px;background-color:green;display:inline:block;'>RECORD ADDED SUCCESSFULLY</h3>";
                         }
       
                     }

                    ?>
                </form>
            </div>
        </div>
    </div>

</body>
</html>