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
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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

                    <div class="span6">
                        <h3 class="text-left">Previous work</h3>
                        <div class="row-fluid">
                            <div class="span6">
                                <a href="sampleprevious.php"><img alt="140x140" src="img/maintest1.png" class="img-rounded" /></a>
                            </div>
                            <div class="span6">
                                <img alt="140x140" src="img/maintest1.png" />
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <img alt="140x140" src="img/maintest1.png" />
                            </div>
                            <div class="span6">
                                <img alt="140x140" src="img/maintest1.png" />
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <form enctype="multipart/form-data" action="upload.php" method="post">
                            <h3>Upload a new form</h3><br><br>
                            <label for="filepicker" style="color: #65bdff;
                                    border-radius : 12px;
                                    border: 1px solid #ccc;
                                    display: inline-block;
                                    padding: 6px 12px;
                                    cursor: pointer;
                                    font-family: 'Carrois Gothic', sans-serif;">Upload</label>
                            <input type="file"  id="filepicker" name="fileList" webkitdirectory multiple style="" />
                            
                            <ul id="listing" class="listed-files"></ul>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>