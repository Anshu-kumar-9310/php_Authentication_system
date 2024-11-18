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
    <title>Register</title>
    <link rel="stylesheet" href="admin_page.css">
 </head>
 <body class="abody">
    <div class="container">
        <h1>CREATE ACCOUNT</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="full_name" class="rtext" required placeholder="Enter Your Name : " ><br><br>
            <input type="text" name="uname" class="rtext" required placeholder="Enter Your Username : " ><br><br>
            <input type="password" name="pass" class="rtext" required placeholder="Enter Your Password : " ><br><br>
            <input type="email" name="email" class="rtext" required placeholder="Enter Your E-Mail : " ><br><br>
            <input type="text" name="mobile" class="rtext" required placeholder="Enter Your Mobile No. : " ><br><br>
            <input type="checkbox" required name="box" value="" class="check"><label> I agree all statements in <a href="">Terms of service</a></label> <br><br>

            <input type="submit" value="SIGN UP " class="rsubmit" name="submit"> 
            <p>Have already an account ? <a href="login.php">Login here</a></p>

            <?php
            if(isset($_POST['submit'])){

                $fname=$_POST['full_name'];
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
        
                $con=mysqli_connect('localhost','root','','login') or die("not connect");
                $sql="select user_name from admin where user_name='$uname'";
                $result=mysqli_query($con,$sql);

                if(mysqli_num_rows($result)>0){
                    echo "<h2 style='color:red;text-align:center;margin:30px 10px'>Error: Username already exists </h2>";
                }else{
                    $sql1="INSERT INTO admin(user_name,pass,name,email,mobile) VALUES ('$uname','$pass','$fname','$email','$mobile')";
           
                    if( mysqli_query($con,$sql1)){
                        header("Location:login.php");
                    }
                 }
        
            }

            ?>
        </form>
    </div>
 </body>
 </html>
   



