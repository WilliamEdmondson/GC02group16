<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register, login and logout user php mysql</title>
    <link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">

</head>
<body>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-xs-6 span4">
        </div>
        <div class="col-xs-6 span4">
            <div class="carousel slide" id="carousel-868333">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-616800">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-616800">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-616800">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="img/UCL1.gif" />
                        <div class="carousel-caption">
                            <h4>
                                Signup
                            </h4>
                            <p>
                                Signup
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="img/UCL1.gif" />
                        <div class="carousel-caption">
                            <h4>
                                Signup2
                            </h4>
                            <p>
                                Signup2
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="img/UCL1.gif" />
                        <div class="carousel-caption">
                            <h4>
                                Signup3
                            </h4>
                            <p>
                                Signup3
                            </p>
                        </div>
                    </div>
                </div> <a data-slide="prev" href="#carousel-616800" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-616800" class="right carousel-control">›</a>
            </div>
            <?php
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if (strpos($url,'error=empty') !==false){
                echo "Fill out all fields!";
            }
            else if (strpos($url,'error=username') !==false){
                echo "Username already exists!";
            }
            else if (strpos($url,'error=notsame') !==false){
                echo "You have entered different password !";
            }


            ?>


            <form action="includes/Signup1.php" method="POST">
                <input type="text" name="first" placeholder="Firstname"><br>
                <input type="text" name="last" placeholder="Lastname"><br>
                <input type="text" name="uid" placeholder="Username"><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <input type="password" name="pwd2" placeholder="Confirm Password"><br>
                <button type="submit">SIGN UP</button>
                <br>
                <a href="login page1.php">Back</a>
            </form>
        </div>
        <div class="col-xs-6 span4">
        </div>
    </div>
</div>


<br>
<br>
<br>
</body>
</html>