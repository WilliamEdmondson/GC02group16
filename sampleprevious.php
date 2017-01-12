<?php
include("data.php"); //includes session start

if (isset($_SESSION['current_collection'])) {
    $_SESSION['collectionid'] = $_SESSION['current_collection'];
}
else {
    // get colletion id from link
    $collection = $_GET['collection'];
    $_SESSION['collectionid'] = $collection;
}

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
                    
                    <!-- CONTENT -->
                    
                    <ul class="nav nav-tabs">
  						<li class="active"><a data-toggle="tab" href="#chart">Chart</a></li>
  						<li><a data-toggle="tab" href="#bar">Bar</a></li>
						<li><a data-toggle="tab" href="#table">Table</a></li>
                        <li><a data-toggle="tab" href="#comments">Comments</a></li>
					</ul>

					<div class="tab-content">
  						<div id="chart" class="tab-pane fade in active">
                            <div id="align" align="center">
                            <?php include("formdata.php");?>
                            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                            <script type="text/javascript" src="js/Chart.min.js"></script>
                            <?php
                            $json_array = $_SESSION['json_array'];
                            //  echo implode("<br>",$json_array);                       
                            for ($i=0; $i < 20; $i++) {
                                //echo "<div class='col-xs-5 span5'>";
                                $data = $json_array[$i];//      echo $current_json;
                                $question = $i+1;
                                echo "Question $question:";
                                echo get_question_description($question);
                                //  echo $data;
                                echo "<canvas style = 'padding-top:5px; margin-bottom:50px;' id='mycanvas".$i."' style='width:360; height:360'></canvas>";
                                //echo "</div>";
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
								//echo "<div class='col-xs-5 span5'>";
		                    	$data = $json_array[$j];//		echo $current_json;
		                        $question = $j+1;
		                        echo "Question $question:";
                                echo get_question_description($question);
        	                    $k = $j+100;
	        	                echo "<canvas style = 'padding-top:5px; margin-bottom:50px; width:360; height:360;' id='mycanvas".$k."'></canvas>";
								//echo "</div>";
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
<input id="btnPrint" style="float:right; margin-right:50px; color: #00aced" type="button" value="Print table" onclick=preview(1) />
                    <script>
                        function preview(oper)
                        {
                            if (oper < 10)
                            {
                                bdhtml=window.document.body.innerHTML;
                                sprnstr="<!--startprint"+oper+"-->";
                                eprnstr="<!--endprint"+oper+"-->";
                                prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18);

                                prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
                                window.document.body.innerHTML=prnhtml;
                                window.print();
                                window.document.body.innerHTML=bdhtml;
                            } else {
                                window.print();
                            }
                        }
                    </script>

<input type="button" onclick="Click()" value="Download as png" style="float:right; margin-right:50px; color: #00aced"/>
<!--startprint1-->
<div id="div">
<div id="align" align="center">					
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('quexf');
$bgid;
for ($i=0; $i < 20; $i++) {
	$bgid = $i + 1;
    $cid = $_SESSION['collectionid'];
	$sql="SELECT label, COUNT(f.bid) AS total
    FROM formboxverifychar f RIGHT JOIN boxes b ON b.bid = f.bid JOIN forms c ON f.fid = c.fid
    WHERE b.bgid=$bgid AND c.cid = $cid
    GROUP BY label
    ORDER BY b.bid";
	$records = mysql_query($sql);
//	echo "<div class='col-xs-5 span5' style='margin-left:15px;'>";
	echo "Question $bgid:";
    echo get_question_description($question);
	echo "<table class='table' style='margin-bottom:50px; margin-top:10px;'>";
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
//	echo "</div>";
}
?>
</div>
</div>
<!--endprint1-->
<!--END TABLES-->


<script>
                                function Click() {

                                    //1.convert div to svg
                                    var divContent = document.getElementById("div").innerHTML;
                                    var data = "data:image/svg+xml," +
                                        "<svg xmlns='http://www.w3.org/2000/svg' width='200' height='5500'>" +
                                        "<foreignObject width='100%' height='100%'>" +
                                        "<div xmlns='http://www.w3.org/1999/xhtml' style='font-size:16px;background: white;font-family:Helvetica'>" +
                                        divContent +
                                        "</div>" +
                                        "</foreignObject>" +
                                        "</svg>";
                                    var img = new Image();
                                    img.src = data;
                                    document.getElementsByTagName('body')[0].appendChild(img);


                                    //2.svg to canvas
                                    var canvas = document.createElement('canvas');  //prepare new canvas
                                    canvas.width = img.width;
                                    canvas.height = img.height;

                                    var context = canvas.getContext('2d');  //取得画布的2d绘图上下文
                                    context.drawImage(img, 0, 0);


                                    var a = document.createElement('a');
//                                    a.href = canvas.toDataURL('image/png');  //export to png
//                                    a.download = "TableFigure";  //download name
//                                    a.click(); //download


                                    //3. export to png
                                    var type = 'png';
                                    var imgData = canvas.toDataURL(type);

                                    /**
                                     * obtain mimeType
                                     * @param  {String} type the old mime-type
                                     * @return the new mime-type
                                     */
                                    var _fixType = function (type) {
                                        type = type.toLowerCase().replace(/jpg/i, 'jpeg');
                                        var r = type.match(/png|jpeg|bmp|gif/)[0];
                                        return 'image/' + r;
                                    };


                                    imgData = imgData.replace(_fixType(type), 'image/octet-stream');


                                    /**
                                     * save in local
                                     * @param  {String} data
                                     * @param  {String} filename
                                     */
                                    var saveFile = function (data, filename) {
                                        var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
                                        save_link.href = data;
                                        save_link.download = filename;

                                        var event = document.createEvent('MouseEvents');
                                        event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                                        save_link.dispatchEvent(event);
                                    };

                                    // Download neame
                                    var filename = 'TableFigure' + (new Date()).getTime() + '.' + type;
                                    // download
                                    saveFile(imgData, filename);


                                }
                            </script> 
                            
  						</div>




                        <div id="comments" class="tab-pane fade">
                            <!--COMMENTS-->
                            <div id="align" align="center">
                            <?php
                            echo "<h1> Comments </h1><br>";
                            global $db;

                            $sql = "SELECT val AS text
                                    FROM formboxverifytext f RIGHT JOIN boxes b ON b.bid = f.bid JOIN forms c ON f.fid = c.fid
                                    WHERE b.bid = 101 AND c.cid = '$cid'";

                            $rs = $db->GetAll($sql);

                            foreach ( $rs as $result){
                                echo $result['text'];
                            }


                            ?>
                            </div>
                            <!--END COMMENTS-->
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