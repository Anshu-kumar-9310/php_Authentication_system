<?php
    session_start();

    if(isset($_SESSION['username'])){
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="admin_page.css">
</head>
<body class="abody">
    <div class="alogin">
        
            <h1> SIGN IN </h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                
                <input type="text" name="aname" class="atext" required placeholder="Enter Your Username" ><br><br>

                <input type="password" name="apass" id="" class="atext" required placeholder="Enter Your Password"><br><br>

                <input type="submit" value="LOGIN" class="asubmit" name="submit"> 
            </form>
            <p>Create new account ? <a href="register.php">Register here</a></p>
            
            <?php

                if(isset($_POST['submit'])){

                    $user_name=$_POST['aname'];
                    $pass=$_POST['apass'];
        
                    $con=mysqli_connect('localhost','root','','login') or die("not connect");
                    $sql="select user_name, pass from admin where user_name='$user_name' and pass='$pass' ";
                    $result=mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($result);

                    if(mysqli_num_rows($result)==1){
                        session_start();
                        $_SESSION['username'] = $row['user_name'];
                        
                        header("Location:index.php");
                    }else{
            
                        echo "<h3 style='color:red;text-align:center;margin:20px 10px'>Error: Wrong UserName or Password </h3>";
                    }
        
                }

            ?>
    </div>
</body> 
</html>