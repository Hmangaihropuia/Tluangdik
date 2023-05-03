<?php
    include("ConnectionDB.php");

    $cname = $_POST['cname'];
    $caddress = $_POST['caddress'];
    $cmbno = $_POST['cmbno'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql = "INSERT INTO `user info`(`NAME`, `ADDRESS`, `MOBILE`, `CHECK-IN`, `CHECK-OUT`) VALUES ('$cname','$caddress','$cmbno','$checkin','$checkout')";
    

    if(mysqli_query($conn,$sql))
    {echo"records inserted. .";}
    else {die("Operation failed. .");}
    ?>