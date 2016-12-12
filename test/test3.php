<?php
if (isset($_POST["forgotPass"])){
    include 'db/dbh.php';
    $email = $conn->real_escape_string($_POST["email"]);
    $data = $conn->query("SELECT uid FROM users WHERE uid ='$email'");
    if($data ->num_rows>0){
        $str = "0123456789qwertyuioplkjhgfdsazxcvbnm";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);
        $url = "验证网页.php?token=$str&email=$email";

        //mail($email, "Reset Password", "To reset your passeword, please visit: $url","From: harveyzuo1@gmail.com\r\n");

        $conn->query("UPDATE users SET token='$str' WHERE uid='$email'");

        echo "please check your email!";

        echo $str;
    }else{echo"please check your inputs";

    }

}
?>
<html>
<body>
<form action="test3.php" method="post">
    <input type="text" name="email" placeholder="Email"><br>
    <input type="submit" name="forgotPass" value="Request Password" />

</form>
</body>
</html>
