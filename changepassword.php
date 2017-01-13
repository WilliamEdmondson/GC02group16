<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="img/ucl-icon.gif" />
<div id =sidebar class="visible">
    <?php include("sidebar.php"); ?>

</div>
<head>
    <meta charset="UTF-8">
    <title>change password</title>
    <style type="text/css">
        form{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <?php include("header.php"); ?>
            </div>
        </div>
    </div>
<br><br><br>


<form  action="includes/alterpassword.php" method="post" onsubmit="return alter()">


    <div class="control-group">
        <label class="control-label" for="username">Username:
        <div class="controls">
            <input type="text" name="username" id ="username" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Original password:</label>
        <div class="controls">
            <input type="password" name="oldpassword" id ="oldpassword"/><br>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">New password:</label>
        <div class="controls">
            <input type="password" name="newpassword" id="newpassword"/><br>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Confirm new password:</label>
        <div class="controls">
            <input type="password" name="assertpassword" id="assertpassword"/><br>
        </div>
    </div>



    <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url,'error=incorrect') !==false){
        echo "Your username or password is incorrect!";
    }
    if (strpos($url,'error=notsame') !==false){
        echo "The new passwords you entered didn't match.";
    }
    if (strpos($url,'error=empty') !==false){
        echo "Fill out all fields.";}


    ?>
    <br><br>




    <button class="btn btn-primary btn-lg" onclick="return alter()" type="submit" value="Change password">
        Change password
    </button>
    <br><br>
      <button><a href="dashboard.php">Back</a></button>
</form>


</body>
</html>