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



    <script src="scripts/modernizr-chrg.min.js"></script>
    <script src="scripts/imagesloaded.min.js"></script>
    <script src="scripts/masonry.min.js"></script>
    <script src="scripts/chromagallery.min.js"></script>


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
                            <div class="row-fluid">
                                <?php

                                include "data.php";

                                ?>
                                <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                                <script type="text/javascript" src="js/Chart.min.js"></script>
                                <?php
                                $json_array = $_SESSION['json_array'];
                                //	echo implode("<br>",$json_array);

                                for ($i=0; $i < 20; $i++) {
                                    ?><div class="col-xs-3 span5"><?php
                                    $data = $json_array[$i];
//		echo $current_json;
                                    $question = $i+1;
                                    echo "Question $question:<br><br>";
//	echo $data;
                                    echo "<canvas id='mycanvas".$i."' style='width:300; height:300'></canvas>";
                                    echo "<script language='javascript'>
	
	                                var data = $data;
                                    var label = [];
                                    var total = [];
                                
                                    for(var j in data) {
                                        label.push(data[j].label);
                                        total.push(data[j].total);
                                    }
                                    var ctx = document.getElementById('mycanvas".$i."');
                                    var mycanvas".$i." = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: label,
                                        datasets: [{
                                                label: 'Question ' + $question,
                                                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(153, 102, 255, 0.2)'],
                                                borderColor: ['rgba(255,99,132,1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(153, 102, 255, 1)'],
                                                data: total
                                                        }
                                                    ]
                                                },
                                                options: {
                                                    responsive: false,
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero:true
                                                            }
                                                        }]
                                                    }
                                                }
                                            
                                            });
                                            
                                                </script>";
                                    ?><br><br><br></div><?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="span4">

                        <br><h3 class="text-left">Upload</h3><br><br>
                        <br><br>
                        <form action="parser.php" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <p><a href="view_upload.php">View Upload</a> </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>