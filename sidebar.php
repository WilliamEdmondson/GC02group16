<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>

<div id="sidebar" class="sidebar-menu" >
    <div id class="menu">
        <ul id="menu" >
        
            <li id="menu-home" ><a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Main Menu</span></a></li>
            
			<li><a href="#"><i class="fa fa-list"></i><span>Previous work</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-arquivos"><a href="view_upload.php"><i class="fa fa-star"></i>Previous uploads</a></li>
                    <li id="menu-arquivos"><a href="sampleprevious.php"><i class="fa fa-pie-chart"></i>Previous charts</a></li>
                </ul>
            </li>
            
            <li id="menu--upload"><a href="upload.php"><i class="fa fa-plus"></i><span>Upload</span></a></li>
            
            <li id="menu--comunicacao"><a href="#"><i class="fa fa-user nav_icon"></i><span>My Account</span><span class="fa fa-angle-right" style="float: right"></span></a>         
                <ul id="menu-comunicacao-sub">
                    <li id="menu-arquivos"><a href="changepassword.php"><i class="fa fa-refresh"></i>Change password</a></li>
                    <li id="menu-arquivos"><a href="manage.php"><i class="fa fa-table"></i>Manage</a></li>
                    <li id="menu-arquivos"><a href="includes/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>

            <?php
            if(isset($_SESSION['admin'])) {
                if ($_SESSION['admin'] == 1) { ?>
                    <li><a href="#"><i class="fa fa-user-plus"></i><span>Administrator</span><span
                                    class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-arquivos"><a href="masquerade.php"><i class="fa fa-user-plus"></i>Profile</a>
                            </li>
                            <li id="menu-arquivos"><a href="includes/logout.php"><i
                                            class="fa fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                <?php }
            }?>
        </ul>
        
    </div>
</div>

</body>