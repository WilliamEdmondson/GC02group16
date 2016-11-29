<?php
session_start();
include '../dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid = '$uid' AND pwd = '$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
    header("Location: ../login page1.php");
} else{
    $_SESSION['id'] = $row['id'];
    $_SESSION['uid'] = $row['id'];
    header("Location: ../Test1.php");
}

