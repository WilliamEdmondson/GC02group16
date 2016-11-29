<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
    <link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-xs-6 span9">
            <div class="carousel slide" id="carousel-685276">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-685276">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-685276">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-685276" class="active">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img alt="here is picture 1" src="img/loginucl1.png" width="1356" height="850" />
                        <div class="carousel-caption">
                            <h4>
                                login test
                            </h4>
                            <p>
                                UCL Student OCR Feedback app
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="here is picture 2" src="img/loginucl2.png" width="1356" height="850" />
                        <div class="carousel-caption">
                            <h4>
                                login test2
                            </h4>
                            <p>
                                This is front development
                            </p>
                        </div>
                    </div>
                    <div class="item active">
                        <img alt="here is picture 3" src="img/loginucl3.png" width="1356" height="850" />
                        <div class="carousel-caption">
                            <h4>
                                login test3
                            </h4>
                            <p>
                                html->JS method->css
                            </p>
                        </div>
                    </div>
                </div> <a data-slide="prev" href="#carousel-685276" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-685276" class="right carousel-control">›</a>
            </div>
        </div>
        <div class="col-xs-6 span3">
            <img alt="UCL Student OCR feedback app" src="img/test1.png" />
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <form action="includes/loginverify.php" method="post">
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input id="username" type="text" name="uid" placeholder="Username"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                        <input id="inputPassword" type="password" name="pwd" placeholder="Password"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox"><input type="checkbox" />Remember me</label><button class="btn" type="submit">Login</button>
                        <br><br>
                        <p> Not registered yet? Sign up now!</p>
                        <a href="Signup.php">Sign up</a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>