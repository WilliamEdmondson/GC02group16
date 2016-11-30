<?php
session_start();
session_destroy();

?>
    <html>
    <head>
        <title>高考成绩查询系统</title>
        <style type="text/css">
            #login p{
                margin-top: 15px;
                line-height: 20px;
                font-size: 14px;
                font-weight: bold;
            }

            body {
                background-color: #0d3b5d;
                margin: 0;
                padding: 0;
                font: Arial, Helvetica, sans-serif;
                text-align:center;
                text-align-last: center;
                font-size:20px;
            }
            #login img{
                cursor:pointer;
            }
            form{
                margin-left:20px;
            }
        </style>
    </head>
    <body>

    <form id="login" action="" method="post">
        <p>高考成绩查询系统</p>
        <p>
            <span>账号：</span>
            <input type="text" name="account" value="" size=15> <br/>
            <br/>
            <span>密码：</span>

            <input type="text" name="password" value="" size=15> <br/>

            <br/>
            <span>验证码：</span>
            <input type="text" name="validate" value="" size=10>
            <img  title="点击刷新" src="./captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
    </body>
<?php
//打印上一个session;
//echo "上一个session：<b>".$_SESSION["authnum_session"]."</b><br>";
$validate="";
/*&&isset($_POST["account"])&&isset($_POST["password"])*/
if(isset($_POST["validate"])){
    $validate=$_POST["validate"];
    if($validate!=$_SESSION["authnum_session"]){
//判断session值与用户输入的验证码是否一致;
        echo "<font color=red>验证码错误</font>";

    }else{
        require_once 'LinkDatabase.php';
        $sql = mysql_query("select * from Myuser ", $connID);

        while( $result = mysql_fetch_array($sql))
        {

            if($_POST['account']==$result['uname']&&$_POST['password']==$result['upass'])
            {
                include "SecondView.html";
                echo "登陆成功";
                header("location:SecondView.html");
            }


        }

    }
}
?>