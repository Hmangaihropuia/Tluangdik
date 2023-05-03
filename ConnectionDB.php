<?php
    $conn = mysqli_connect("127.0.0.1","root","","tluangdik_booking");
    if ($conn)
    {
        echo "Database Connected. .";
    }
    else{
        echo("connection Failed. .".mysqli_connect_error());
        
    }