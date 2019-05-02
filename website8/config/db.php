<?php    
    $conn = mysqli_connect('localhost', 'root', 'software1234', 'phpblog');

    // check the conn;
    if(mysqli_connect_errno()) {
        // connection faild
        echo 'failed to connect to mysql'.mysqli_connect_errno();
    } 
?>