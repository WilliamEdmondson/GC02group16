<?php
session_start();
?>
<html>
<div id =sidebar class="visible">
    <?php include("sidebar.php"); ?>
</div>

<script>
    $(document).ready(function() {
        var navoffeset=$(".sidebar-menu").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".sidebar-menu").addClass("fixed");
            }else{
                $(".sidebar-menu").removeClass("fixed");
            }
        });

    });
</script>

<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <meta charset="UTF-8">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>
    <link href="css/dropzone.css" rel="stylesheet" type="text/css">

    <title>Dashboard</title>
</head>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <?php include("header.php"); ?>


            <br><br><br>

            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span10" id="span10">



                        <?php
                        $folder = "uploads";

                        if (is_dir($folder)){
                            $handler = opendir($folder);
                            $output = "";
                            while ($files = readdir($handler)){
                                if(!is_dir($files)){
                                    $output.="<img src =\"uploads/{$files}\" width='180' height='180'>";
                                }
                            }
                        }

                        echo $output;


                        ?>

                        <p><a href="dashboard.php" </p>


                        <p><a href="view_upload.php">View Upload</a> </p>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html



