<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asset";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['id'])) {
    header('location: systemadmin/index.php');
    exit();
}

if (isset($_POST['login_quer'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->query("SELECT * FROM `users` WHERE `username` = '$username'") or die(mysqli_error($conn));
    $fetch = $query->fetch_array();
    $row = $query->num_rows;

    if ($row > 0 && password_verify($password, $fetch['password'])) {
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['firstname'] = $fetch['firstname'];
        $user_id = $fetch['id'];

      
        $current_time = time();
       
        header('location:systemadmin/index.php');
        exit();
    }
    // else {
    //     echo "<center><label style='color:red;'>Invalid username or password</label></center>";
    // }
}
mysqli_close($conn);
?>
