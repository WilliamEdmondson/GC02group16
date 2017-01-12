<?php
include 'quexf-1.18.1/functions/functions.database.php'; //session start included in here

unset($_SESSION['current_collection'])

?>
<html>
<link rel="icon" type="image/png" href="img/ucl-icon.gif" />
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
    <link rel="icon" type="image/png" href="img/ucl-icon.gif" />
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
                        <?php if(!isset($_SESSION['vid'])){
                            echo "<h3>Please log in <a href='index.php'>here</a></h3>";
                        } else { ?>
                            <h3 class="text-left">Previous work</h3>
                            <div class="row-fluid">
                                <div class="row-fluid">
                                <br><br><br><br>
                                    <?php include("data.php");?>
                                <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                                <script type="text/javascript" src="js/Chart.min.js"></script>
                                    <?php
                                    $i = 0;
                                    if($collection_arr = get_last_collections()) {
                                        foreach ($collection_arr as $collection) {
                                        	$cid = $collection['cid'];
                                            $label = $collection['description'];
                                            $json_array = $_SESSION['json_array'];
                                            ?>
                                            <div class="col-xs-3 span5"><?php
                                            $data = $json_array[$i];
                                            echo $label;
                                            echo "<a href='sampleprevious.php?collection=$cid'><canvas id='mycanvas" . $i . "' style='width:200; height:200'></canvas></a>";
                                            echo "<script language='javascript'>
                        
                                        var data = $data;
                                        var label = [];
                                        var total = [];
                                    
                                        for(var j in data) {
                                            label.push(data[j].label);
                                            total.push(data[j].total);
                                        }
                                        var ctx = document.getElementById('mycanvas" . $i . "');
                                        var mycanvas" . $i . " = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: label,
                                            datasets: [{
                                                     backgroundColor: ['rgba(255, 0, 0, 0.2)', 'rgba(255, 110, 0, 0.2)', 'rgba(255, 225, 0, 0.2)', 'rgba(100, 200, 35, 0.2)', 'rgba(50, 185, 255, 0.2)', 'rgba(200, 75, 255, 0.2)'],
                                                     borderColor: ['rgba(255, 0, 0, 1)', 'rgba(255, 110, 0, 1)', 'rgba(255, 225, 0, 1)', 'rgba(100, 200, 35, 1)', 'rgba(50, 185, 255, 1)', 'rgba(200, 75, 255, 1)'],
                                                    borderWidth: 1,
                                                    data: total
                                                            }
                                                        ]
                                                    },
                                                    options: {
						                                responsive: false,
														legend: {
						            						display: false,
        												},
														tooltips: {
                											enabled: false,
            											}
                            						}
                            						});
                                                    </script>";
                                            ?><br><br><br></div><?php
                                            $i++;
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        <?php } ?>
                        <a href="allprevious.php" style="margin-left: 30px;">View all previous work</a>
                    </div>
                    <div class="span4">
                        <h3>Upload</h3>

                        <!--Script for tooltip-->
                        <script>
							$(document).ready(function(){
   							$('[data-toggle="tooltip"]').tooltip();   
							});
						</script>

                        
                        <form action="parser.php" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <br>
                            <input type="file" name="fileList[]" value="fileList" id="fileList" webkitdirectory directory multiple>
                            <br>
                            <h3>Create New Form Collection<a style="color: #53575e;" href="#" data-toggle="tooltip" title="A collection is a group of forms for a class"><sup>?</sup></a></h3>
                            New collection name
                            <input type="text" name="description" style="height: 25px" />
                            <button class="text-left" type="submit" style="margin-bottom: 10px">Create new form collection</button>
                        </form>

                        <h3 style="color: #53575e">or</h3>
                        <br>
                            
                        
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <h3>Add form to an existing collection<a style="color: #53575e;" href="#" data-toggle="tooltip" title="A collection is a group of forms for a class"><sup>?</sup></a></h3>

                                
                                <input type="file" name="fileList[]" value="fileList" id="fileList" webkitdirectory directory multiple>
                                

                            <p>Which collection would you like to add files to?</p>
                            <select name="collection">
                                <option value="" >--Select--</option>
                                <?php
                                $cid_arr = get_collections();
                                foreach( $cid_arr as $cid){
                                    echo $cid['cid'];
                                }
                                foreach ($cid_arr as $collection)
                                {
                                    ?>
                                    <option value=<?php echo($collection['cid']);?>><?php echo($collection['description']);?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <button type="submit">Add Files</button>
                        </form>




                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>