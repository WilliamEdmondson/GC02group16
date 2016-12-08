<?php

if($_POST['name'] == "")

{

    echo "请填写用户名<br><a href='login.php'>返回</a>";

}elseif($_POST['password'] == "")

{

    echo "请填写密码<br><a href='login.php'>返回</a>";

}else

{

    $conn = mysqli_connect("localhost","root","")

    or die("不能连接数据库".mysqli_error());

    mysqli_select_db("user")

    or die ("不能连接到user".mysqli_error());

    $sql = "select * from user where id=3";

    $result = mysqli_query($sql);

    $query = mysqli_fetch_array($result);

    mysqli_close($conn);

    if(($query['name'] == $_POST['name']) && ($query['password'] == $_POST['password']))

    {

        echo "验证成功！<br>";

    }else

        echo "密码错误<br>";

    echo "<a href='login.php'>返回</a>";

}

?>