<?php
session_start();
?>
<html>
<link rel="icon" type="image/png" href="img/ucl-icon.gif" />
<div id =sidebar class="visible">
    <?php include("sidebar.php"); ?>
</div>


<head>
<title>Sample previous work</title>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <?php include("header.php"); ?>
            <br>
            <!--header start here-->

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle ="tab" href="#chart">Chart</a></li>
                            <li><a  href="previousT.php">Table</a></li>
                        </ul>
                    </div>
			    <div id="myTabContent" class="tab-content">

                    <div id="chart" class="tab-pane fade in active">

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
	                        ?><div class="col-xs-3 span3"><?php
		                    $data = $json_array[$i];//		echo $current_json;
	                        $question = $i+1;
	                        echo "Question $question:<br><br>";
                            //	echo $data;
	                        echo "<canvas id='mycanvas".$i."' style='width:360; height:360'></canvas>";
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
                    </div><!--endprint1-->
                </div>
            </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>