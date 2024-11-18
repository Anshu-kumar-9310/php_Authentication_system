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
                <li><a href="logout.php">LOG OUT</a></li>

            </ul>
        </div>
        
        <div class="main">
           <h2>ALL RECORDS</h2>
           <div class="main-con">
           <?php
                 $con=mysqli_connect('localhost','root','','login');
                //  $sql="SELECT * FROM student_record JOIN class WHERE student_record.s_class = class.class_id";

                 $sql="SELECT * FROM student_record JOIN class WHERE student_record.s_class = class.class_id ORDER BY id DESC";
                //  use this statement for show in decreasing order

                 $result=mysqli_query($con,$sql);

                 if(mysqli_num_rows($result)>0){           
            ?>
           <table  cellspacing="0" border="2px" class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>GENDER</th>
                            <th>ADDRESS</th>
                            <th>CLASS</th>
                            <th>PHONE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ;?></td>
                            <td><?php echo $row['s_name']; ?></td>
                            <td><?php echo $row['s_gender']; ?></td>
                            <td><?php echo $row['s_address']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <!-- $row['class'] is used for fetch data from class table which column name is class -->
                            <td><?php echo $row['s_mobile']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="action">EDIT</a>
                                <a href="delete_inline.php?id=<?php echo $row['id'];?>" class="action d1">DELETE</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php } ?>
           </div>
        </div>
    </div>

</body>
</html>