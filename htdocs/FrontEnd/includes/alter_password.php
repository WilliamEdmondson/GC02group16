<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>changing</title>
</head>
<body>
<?php
session_start ();
$username = $_REQUEST ["username"];
$oldpassword = $_REQUEST ["oldpassword"];
$newpassword = $_REQUEST ["newpassword"];

$con = mysqli_connect ( "localhost", "root", "root" );
if (! $con) {
    die ( 'Database connection failed' . $mysqli_error () );
}
mysqli_select_db ( "user_info", $con );
$dbusername = null;
$dbpassword = null;
$result = mysqli_query ( "select * from user_info where username ='{$username}' and isdelete =0;" );
while ( $row = mysqli_fetch_array ( $result ) ) {
    $dbusername = $row ["username"];
    $dbpassword = $row ["password"];
}
if (is_null ( $dbusername )) {
    ?>
    <script type="text/javascript">
        alert("Username does not exist");
        window.location.href="alter_password.html";
    </script>
    <?php
}
if ($oldpassword != $dbpassword) {
    ?>
    <script type="text/javascript">
        alert("wrong password");
        window.location.href="alter_password.html";
    </script>
    <?php
}
mysqli_query ( "update  user_info set password='{$newpassword}' where username='{$username}'" ) or die ( "存入数据库失败" . mysql_error () );//如果上述用户名密码判定不错，则update进数据库中
mysqli_close ( $con );
?>


<script type="text/javascript">
    alert("password has been change!");
    window.location.href="index.html";
</script>
</body>
</html>