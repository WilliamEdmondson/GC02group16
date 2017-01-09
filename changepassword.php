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



    <button class="btn btn-primary btn-lg" onclick="return alter()" type="submit" value="Change password">
        Change password
    </button>
    <br><br>
      <button><a href="dashboard.php">Back</a></button>
</form>
<script type="text/javascript">
    document.getElementById("username").value="<?php echo "${_SESSION["username"]}";?>"
</script>

<script type="text/javascript">
    function alter() {

        var username=document.getElementById("username").value;
        var oldpassword=document.getElementById("oldpassword").value;
        var newpassword=document.getElementById("newpassword").value;
        var assertpassword=document.getElementById("assertpassword").value;
        var regex=/^[/s]+$/;
        if(regex.test(username)||username.length==0){
            alert("The username is not in the correct format");
            return false;
        }
        if(regex.test(oldpassword)||oldpassword.length==0){
            alert("The original password is not in the correct format");
            return false;
        }
        if(regex.test(newpassword)||newpassword.length==0) {
            alert("The new password is not in the correct format");
            return false;
        }
        if (assertpassword != newpassword||assertpassword==0) {
            alert("Two password entries are inconsistent");
            return false;
        }
        return true;

    }
</script>
</body>
</html>