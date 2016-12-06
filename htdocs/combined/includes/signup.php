<?php
session_start();
include '../db/dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

if ($pwd !== $pwd2) {
    header("Location: ../index.php?error=notsame");
    exit();
	}
if (empty($first)){
    header("Location: ../index.php?error=empty");
    exit();
}
if (empty($last)){
    header("Location: ../index.php?error=empty");
    exit();
}
if (empty($uid)){
    header("Location: ../index.php?error=empty");
    exit();
}
if (empty($pwd)){
    header("Location: ../index.php?error=empty");
    exit();
}
else {

    $sql = "SELECT uid FROM users WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $uidcheck = mysqli_num_rows($result);
    
	if($uidcheck > 0){
        header("Location: ../index.php?error=username");
        exit();

    }else{
        $sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";

        $result = mysqli_query($conn, $sql);

        header("Location: ../index.php");
    }
}

?>
