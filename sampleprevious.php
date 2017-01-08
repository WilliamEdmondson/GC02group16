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
                    
                    <!-- CONTENT -->
                    
                    <ul class="nav nav-tabs">
  						<li class="active"><a data-toggle="tab" href="#chart">Chart</a></li>
  						<li><a data-toggle="tab" href="#bar">Bar</a></li>
						<li><a data-toggle="tab" href="#table">Table</a></li>
					</ul>

					<div class="tab-content">
  						<div id="chart" class="tab-pane fade in active">
   							<!--PIE CHART-->
                            <div id="align" align="center">
                            <?php include("data.php");?>
                            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                            <script type="text/javascript" src="js/Chart.min.js"></script>
                            <?php
	                        $json_array = $_SESSION['json_array'];
                            //	echo implode("<br>",$json_array);						
	                        for ($i=0; $i < 20; $i++) {
								echo "<div class='col-xs-5 span5'>";
		                    	$data = $json_array[$i];//		echo $current_json;
		                        $question = $i+1;
		                        echo "Question $question:";
        	                    //	echo $data;
	        	                echo "<canvas style = 'padding-top:5px; margin-bottom:50px;' id='mycanvas".$i."' style='width:360; height:360'></canvas>";
								echo "</div>";
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
                            backgroundColor: ['rgba(255, 0, 0, 0.2)', 'rgba(255, 110, 0, 0.2)', 'rgba(255, 225, 0, 0.2)', 'rgba(100, 200, 35, 0.2)', 'rgba(50, 185, 255, 0.2)', 'rgba(200, 75, 255, 0.2)'],
                            borderColor: ['rgba(255, 0, 0, 1)', 'rgba(255, 110, 0, 1)', 'rgba(255, 225, 0, 1)', 'rgba(100, 200, 35, 1)', 'rgba(50, 185, 255, 1)', 'rgba(200, 75, 255, 1)'],
							borderWidth: 1,
                            data: total
                            }]},
                            options: {
                                responsive: false,
                            	}
                            });
	                        </script>";
                            }
                            ?>
                            </div>
                            <!--END PIE CHART-->
  						</div>
                        
                        
  						<div id="bar" class="tab-pane fade">
    						<!--BAR CHART-->
                            <div id="align" align="center">
                            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                            <script type="text/javascript" src="js/Chart.min.js"></script>
                            <?php
	                        $json_array = $_SESSION['json_array'];
							for ($j=0; $j < 20; $j++) {
								echo "<div class='col-xs-5 span5'>";
		                    	$data = $json_array[$j];//		echo $current_json;
		                        $question = $j+1;
		                        echo "Question $question:";
        	                    $k = $j+100;
	        	                echo "<canvas style = 'padding-top:5px; margin-bottom:50px; width:360; height:360;' id='mycanvas".$k."'></canvas>";
								echo "</div>";
	            	            echo "<script language='javascript'>
	                	        var data = $data;
                        	    var label = [];
                            	var total = [];
	                            for(var j in data) {
    	                        label.push(data[j].label);
        	                    total.push(data[j].total);
								}
                            var ctx = document.getElementById('mycanvas".$k."');
                            var mycanvas".$k." = new Chart(ctx, {
                            type: 'bar',
                            data: {
                            labels: label,
                            datasets: [{
                            label: 'Question ' + $question,
                            backgroundColor: ['rgba(255, 0, 0, 0.2)', 'rgba(255, 110, 0, 0.2)', 'rgba(255, 225, 0, 0.2)', 'rgba(100, 200, 35, 0.2)', 'rgba(50, 185, 255, 0.2)', 'rgba(200, 75, 255, 0.2)'],
                            borderColor: ['rgba(255, 0, 0, 1)', 'rgba(255, 110, 0, 1)', 'rgba(255, 225, 0, 1)', 'rgba(100, 200, 35, 1)', 'rgba(50, 185, 255, 1)', 'rgba(200, 75, 255, 1)'],
							borderWidth: 1,
                            data: total
                            }]},
                            options: {
                                responsive: false,
								scales: {
            						yAxes: [{
                						ticks: {
											stepSize: 1,
                    						beginAtZero: true
                						}
           							}]
        						}
                            }
                            });
	                        </script>";
                            }						
	                        
                            ?>
                            </div>
                            <!--END BAR CHART-->
  						</div>
                        
                        
 						<div id="table" class="tab-pane fade">
<!--TABLES-->
<div id="align" align="center">					
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('quexf');
$bgid;
for ($i=0; $i < 20; $i++) {
	$bgid = $i + 1;
	$sql="SELECT label, COUNT(f.bid) AS total
	FROM boxes b LEFT JOIN formboxverifychar f ON b.bid = f.bid
	WHERE b.bgid=$bgid
	GROUP BY label
	ORDER BY b.bid";
	$records = mysql_query($sql);
	echo "<div class='col-xs-5 span5' style='margin-left:15px;'>";
	echo "Question $bgid:";
	echo "<table class='table' style='margin-bottom:50px; margin-top:10px;'>";
//	echo "<thead>";
	echo "<tr>";
		echo "<th width='70%'>Option</th>";
		echo "<th width='30%'>Total</th>";
	echo "</tr>";
//	echo "</thead>";
//	echo "<tbody>";
	while ($quexf=mysql_fetch_assoc($records)) {
		echo "<tr>";
		echo "<td>".$quexf['label']."</td>";
		echo "<td>".$quexf['total']."</td>";
		echo "</tr>";
	}
//	echo "</tbody>";
	echo "</table>";
	echo "</div>";
}
?>
</div>
<!--END TABLES--> 
                            
  						</div>
					</div>
                    
                    <!-- END CONTENT -->
                    
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>