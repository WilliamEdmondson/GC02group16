<?php
session_start();


?>
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
        <div class="span12">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="Test1.php">Main menu</a>
                </li>
                <li class="dropdown pull-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="changepassword.php">Change password</a>
                        </li>
                        <li>
                            <a href="pre_upload.php">Manage mywork</a>
                        </li>
                        <li>
                            <a href="includes/logout.inc.php">logout</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Administrator</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
            <p>
                <strong>Navigation bar (I will use javascript at here)</strong>
            </p>
            <div class="accordion" id="accordion-809795">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-parent="#accordion-809795" data-toggle="collapse" href="#accordion-element-643567">Main Menu</a>
                    </div>
                    <div class="accordion-body in" id="accordion-element-643567">
                        <div class="accordion-inner">
                            <a href="Test1.php">Back to Main Menu</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-parent="#accordion-809795" data-toggle="collapse" href="#accordion-element-117278">
                            My Previous Work</a>
                    </div>
                    <div class="accordion-body in" id="accordion-element-117278">
                        <div class="accordion-inner">
                            <a href="pre_upload.php">Sub-previous upload</a>
                        </div>
                        <div class="accordion-inner">
                            <a href="pre_chart.php">Sub-previous chart</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-parent="#accordion-809795" data-toggle="collapse" href="#accordion-element-117278">Upload</a>
                    </div>
                    <div class="accordion-body in" id="accordion-element-117278">
                        <div class="accordion-inner">
                            Upload new project
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span10">
            <h3 class="text-left">
                Previous work
            </h3>
            <div class="row-fluid">
                <div class="span10">
                    <div class="row-fluid">
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                        <div class="col-xs-3 span3">
                            <img alt="140x140" src="img/a.jpg" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
