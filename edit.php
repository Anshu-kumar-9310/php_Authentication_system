<?php
    
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location:login.php');
    }

    $student_id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','login');
    $sql="SELECT * FROM student_record WHERE id='$student_id'";
    $result=mysqli_query($con,$sql);
    $record=mysqli_fetch_array($result);

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit record inline</title>
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
           <h2>Edit Record </h2>
           <div class="data">
                <form action="update_data.php" method="POST">
               
                    <label for="">Name</label>
                    <input type="text" value="<?php echo $record['s_name'];?>" name="sname" required> <br><br>
                    <input type="hidden" name="hide_id" value="<?php echo $record['id'];?>">

                    <label for="">Address</label>
                    <input type="text" name="sadd" class="address" value="<?php echo $record['s_address'];?>" required> <br><br>

                    <label >Gender</label>
                    <select name="sgender" class="gender" value="<?php echo $record['s_gender'];?>">
                        <?php 
                            if($record['s_gender']=='Male'){
                                echo '<option selected value="Male">Male</option>';
                                echo '<option value="Female">Female</option>';
                                echo '<option value="Other">Other</option>';
                            }
                            elseif($record['s_gender']=='Female'){
                              echo '<option selected value="Female">Female</option>';
                              echo '<option value="Male">Male</option>';
                              echo '<option value="Other">Other</option>';
                            }else{
                              echo '<option selected value="Other">Other</option>';
                              echo '<option value="Male">Male</option>';
                              echo '<option value="Female">Female</option>';
                            }
                        ?>

                    </select><br><br>

                    <label for="">Class</label>
                    <select name="sclass" class="class" value="">
                        <?php 
                            $con=mysqli_connect('localhost','root','','login');
                            $sql1="SELECT * FROM class";
                            $result1=mysqli_query($con,$sql1);
                            if(mysqli_num_rows($result1)>0){
                                while($record1=mysqli_fetch_array($result1)){
                                    if($record['s_class']==$record1['class_id']){
                                        $select="selected";
                                    }else{
                                        $select="";
                                    }
                                    echo "<option {$select} value='{$record1['class_id']}'>{$record1['class']}</option>";
                                }
                            }

                            
                        ?>
                        <!-- <option value="" selected>BCOM</option>
                        <option value="">BSC</option>
                        <option value="">BA</option>
                        <option value="">BCA</option>
                        <option value="">MBA</option> -->
                    </select><br><br>

                    <label for="">Mobile</label>
                    <input type="text" name="smobile" class="mobile" value="<?php echo $record['s_mobile'];?>" required><br><br>

                    <input type="submit" value="SAVE" name="save" class="submit"><br>
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>