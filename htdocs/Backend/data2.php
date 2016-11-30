<?php
//setting header to json
//header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'quexf');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT label, COUNT(f.bid) AS total FROM boxes b JOIN formboxverifychar f ON b.bid = f.bid WHERE f.bid=1 OR f.bid=2 OR f.bid=3 OR f.bid=4 OR f.bid=5 GROUP BY label");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//write to json file
//$filename = tempnam('/tmp', 'cre');
$fp = fopen('data2.json', 'w');
//$fp = fopen($filename, 'w');
fwrite($fp, json_encode($data));
fclose($fp);

$json_data = json_encode($data);

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>