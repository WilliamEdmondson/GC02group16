<?php

if(isset($_GET["email"]) && isset($_GET["token"])){
    include 'db/dbh.php';

    $email = $conn->real_escape_string($_GET["email"]);
    $token = $conn->real_escape_string($_GET["token"]);

    $data=$conn->query("SELECT * FROM users WHERE uid='$email' AND token='$token'");

    if($data->num_rows>0){

//        $str="0123456789qwertyuioplkjhgfdsazxcvbnm";
//        $str = str_shuffle($str);
//        $str = substr($str, 0, 15);
        $password = 66666666;

       $conn->query("UPDATE users SET pwd = '$password',token = '' WHERE uid ='$email'");




        $url1 = "http://localhost/GC02group16-master/htdocs/combined/index.php?error=resetpass";
        ?>


        <html>
        <head>
            <meta http-equiv="refresh" content="3;
url=<?php echo $url1; ?>">
        </head>
        <body>
        <h1>Verify success!</h1>
        <p><strong>Your Temporary password is: 66666666</strong></p>
        <p>Please login and change your password as soon as possible!</p>
        <p>Will jump to login page automatically...</p>
        </body>
        </html>


<?php




    }else"please check your link!";

}else{

}

?>