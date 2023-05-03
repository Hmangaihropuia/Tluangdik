<?php
include("ConnectionDB.php");

$sql="SELECT 'NAME', 'ADDRESS', 'MOBILE', 'CHECK-IN','CHECK-OUT' FROM user info";
$result = $conn -> query($sql);
if ($result -> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Name: ".$row["NAME"], "ADDRESS: ".$row["ADDRESS"],  "MOBILE: ".$row["MOBILE"], "CHECK-IN: ".$row["CHECK-IN"], "CHECK-OUT: ".$row["CHECK-OUT"];
    } }
    else {
        echo "No Record found.";
    }

$conn->close();
?>