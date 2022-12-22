<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://Techgenie-ECS-task-1705047770.us-east-2.elb.amazonaws.com');
    define('LOCALHOST', 'food-order.c6ccdw5ahkes.us-east-2.rds.amazonaws.com');
    define('DB_USERNAME', 'admin');
    define('DB_PASSWORD', 'admin123');
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>
