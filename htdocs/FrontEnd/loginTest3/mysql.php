<?php

$db = mysqli_connect("localhost","root","") or die("连接数据库失败！");

if(!mysqli_query("create database if not exists `user`"))

{

    echo "创建数据库失败<br>";

}else

{

    echo "创建数据库成功！<br>";

}

mysqli_query("use user;");

$sql ="Create TABLE if not exists `user` ("

    ." `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,"

    ." `name` VARCHAR(10) NOT NULL,"

    ." `password` VARCHAR(16) NOT NULL"

    ." )";

if(!mysqli_query($sql))

{

    echo "创建数据表失败！<br>";

}else

{

    echo "创建数据表成功！<br>";

}

$sql = "Insert INTO `user` ( `name`, `password`) VALUES ( 'php-fish', '123');";

if(mysqli_query($sql))

    echo "插入用户成功！<br>";

else

    echo "插入失败！<br>";

mysqli_close($db);

?>