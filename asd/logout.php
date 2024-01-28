<?php
    session_start();
    require_once 'connect.php';
    $user_id = $_SESSION['id'];
    $conn->query("SELECT * FROM users WHERE `id` = '$user_id'") or die(mysqli_error($conn));  
    if(session_destroy()){
        header("location: index.php");
    }
?>