<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
</head>
<body>
<div class="page-container">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="header-left">
                    <div class="logo-name">
                        <a href="dashboard.php"> <h1 style="color:#65bdff; width:500px; margin-top: 16px;">ATG Class Student OCR Feedback Scanning App</i></h1></a>
                    </div>

                    <div class="clearfix" > </div>
                </div>
                <div class="header-right">
                    <div class="clearfix">
                        <p style="color:#65bdff;font-size:20px;font-weight:bold; text-align:right;margin-top: 5px;
								   margin-right: 50px;">Welcome, <?php echo $_SESSION['id'];?>! </i> </p>
                    </div>
                    <div class="clearfix">
                        <p style="color:#65bdff;font-size:15px; text-align:right;margin-top: 20px;
								   margin-right: 50px;"><a href="includes/logout.php">Log out</a></i></p>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>

            <!--heder end here-->
            <!-- script-for sticky-nav -->
           