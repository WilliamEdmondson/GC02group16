<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>change password</title>
    <link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        form{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
session_start();
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if (strpos($url,'error=empty') !==false){
                echo "Fill out all fields!";
            }
            else if (strpos($url,'error=incorrect') !==false){
                echo "incorrect username or password!";
            }
            else if (strpos($url,'error=notsame') !==false){
                echo "You have entered different new password !";
            }


            ?>

<form  action="includes/alter_password.php" method="post">

    <input id="username" type="text" name="uid" placeholder="Username"><br>
    <input id="inputPassword" type="password" name="pwd" placeholder="Original password"><br>
    <input type="password" name="newpassword" placeholder="New password"><br>
    <input type="password" name="assertpassword" placeholder="Confirm new password"><br>
    <button type="submit">Change password</button>
    <a href="Test1.php">Back</a>
</form>
</body>
</html>