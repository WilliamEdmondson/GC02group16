<?php

/*
 *---------------------------------------------------------------
 * PREVIOUS T
 *---------------------------------------------------------------
 *
 *
 * @HZ
 */

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
                            <li><a href="previous.php">Chart</a></li>
                            <li class="active"><a data-toggle ="tab" href="#chart">Table</a></li>

                        </ul>
                    </div>
			    <div id="myTabContent" class="tab-content">

                    <div id="chart" class="tab-pane fade in active">


                <div id="table" class="tab-pane fade in active">
                    <input id="btnPrint" style="float:right" type="button" value="Print all" onclick="javascript:window.print();" />
                    <input id="btnPrint"  style="float:right; margin-right:10px; " type="button" value="Print table" onclick=preview(1) />
                    <!--                        <style type="text/css" media=print>-->
                    <!--                            .noprint{display : none }-->
                    <!--                        </style>-->
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

                    <!--startprint1-->
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

	echo "Question $bgid";

	echo "<table style = 'margin:20; border:1px solid black'>";

	echo "<tr>";
		echo "<th style = 'padding:5px; border:1px solid grey'>Option</th>";
		echo "<th style = 'padding:5px; border:1px solid grey'>Total</th>";
	echo "</tr>";

	while ($quexf=mysql_fetch_assoc($records)) {
		echo "<tr>";
		echo "<td style = 'padding:5px;'>".$quexf['label']."</td>";
		echo "<td style = 'padding:5px;'>".$quexf['total']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
                </div><!--endprint1-->
            </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>