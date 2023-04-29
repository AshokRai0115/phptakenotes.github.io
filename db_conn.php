<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "Todo";
    
    $conn = mysqli_connect($host, $user, $password, $db);

    if($conn){
        echo "connected to db<br>";
    }else{
        echo "failed to connect to db<br>";
    }
?>