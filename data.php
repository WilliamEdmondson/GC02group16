<?php
include_once 'quexf-1.18.1/functions/functions.database.php'; //includes session start


//setting header to json
//header('Content-Type: application/json');

/*database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'quexf');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}
*/
//query to get data from the table

global $db;

$json = array();
//$_SESSION['collection'] = 2;

// check if masquerading as another user
if (isset($_SESSION['masqvid'])) {
    $vid = $_SESSION['masqvid'];
}
else {
    $vid = $_SESSION['vid'];
}


$sql = "SELECT cid FROM formcollections WHERE vid = $vid ORDER BY cid DESC";

$result = $db->getAll($sql);

foreach ($result as $item) {
    $cid = $item['cid'];
    $query="SELECT label, COUNT(f.bid) AS total
	FROM formboxverifychar f RIGHT JOIN boxes b ON b.bid = f.bid JOIN forms c ON f.fid = c.fid
	WHERE b.bgid=1 AND vid = $vid AND cid = $cid
	GROUP BY label
	ORDER BY b.bid";

//print question number
//echo "Question $bgid:<br>";


//execute query
    $result = $db->query($query);

//loop through the returned data
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

//free memory associated with result
    $result->close();

//now print the data
    $json_string = json_encode($data);
    array_push($json,$json_string);
//echo "<br><br>";
}

$_SESSION['json_array'] = $json;

/*close connection
$mysqli->close();
*/
?>