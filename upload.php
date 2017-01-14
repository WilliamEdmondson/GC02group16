<h1>Upload stage</h1>
<?php
include 'quexf-1.18.1/functions/functions.import.php';
include 'quexf-1.18.1/functions/functions.database.php'; //session_start included in here
include("quexf-1.18.1/functions/functions.xhtml.php");
include("quexf-1.18.1/functions/functions.process.php");

//test that there are files to be uploaded
if(!isset($_FILES['fileList']['name'][0]))
{
    header("Location: dashboard.php");
}

if(!isset($_POST['collection']))
{
        //increment collections database

    new_collection();
    echo "new collection created<br>";

    //set the collection name
    if($description = $_POST['description'] == "") {
        $description = 'my_collection_' . $current_cid;
    } else {
        $description = $description = $_POST['description'];
    }
    echo "Collection description : ".$description."<br>";

} else {
    echo $_POST['collection'];
    echo "collection previously set as a post variable<br>";

}


$current_cid = $_POST['collection'];

//set current collection
$_SESSION['current_collection']=$current_cid;

$vid = get_vid();

//TODO ability to change the qid HARDCODED HERE
$qid = 1;



//update the vid and description in the formcollections table
update_collection($current_cid, $vid, $description, $qid);

//path for files not uploaded
$targetpath = "uploads/";

//remove all current files from targetpath
array_map('unlink', glob("uploads/*"));


//move selected files to upload directory
$continue = 0;
for( $i = 0 ; $i < sizeof($_FILES['fileList']['name']) ; $i++) {
    echo $i." ";
    $temp_name = $_FILES['fileList']['tmp_name'][$i];
    echo $name = basename($_FILES['fileList']['name'][$i]);
    echo move_uploaded_file( $temp_name , "$targetpath/$name" ) ? " Successfully Moved to /upload<br>" : "unsuccessfully moved to upload<br>";
}


//import this directory
import_directory($targetpath);



//set the verifier to current user and set cid to current cid

$vid = get_vid();


$sql = "UPDATE forms
			SET assigned_vid = '$vid',
			    cid = '$current_cid'
			WHERE assigned_vid IS NULL";

if($db->Execute($sql))
{
    echo "success assigning vid";
}
else
{
    echo "failure assigning vid";
}


//
header("Location: quexf-1.18.1/verifyjs.php");

/*
//import the target directory using the import_directory function functions.database
import_directory($targetpath);

//assign the form to the current user TODO vid
assign_to($vid);

//set the veriferquestionaire variables TODO find the function 'set_vq'

//update the vid and description in the formcollections table
//update_collection($cid, $vid, $description, $qid);

echo "<br><br>form has been assigned to the current user";

//TODO write a SQL query which sets the fid to the current users vid therefore allowing them access
?>
<br><br>
<form action="quexf-1.18.1/verifyjs.php">
    <input type='submit' value='proceed to verification'/>
</form>
*/