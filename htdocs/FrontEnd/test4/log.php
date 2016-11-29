<?php
$connect = new mysqli("localhost", "root", "","login");
if($connect->connect_error){
    die("connection failed bruh");}
else
    echo 'conect worked';


?>