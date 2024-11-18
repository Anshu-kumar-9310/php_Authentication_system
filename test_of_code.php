<?php
    $con=mysqli_connect('localhost','root','','login');
    // if($con){
    //     echo 'succesful';
    // }

    $sql="select * from protection";
    $result=mysqli_query($con,$sql);
    // $row=mysqli_fetch_array($result);
    // echo "<pre>";
    //     echo print_r($row);
    // echo "</pre>";

    while($row=mysqli_fetch_array($result)){
        echo $row['username']."   ".$row['pass']."   ".$row['mobile']."   ".$row['email']."<br>";
    }

    // $sql='alter table protection add email varchar(30)';
    // if(mysqli_query($con,$sql)){
    //     echo "yes";
    // }


    
    
?>
