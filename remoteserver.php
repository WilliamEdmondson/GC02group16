// PHP Data Objects(PDO) Sample Code:
<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:gc0216.database.windows.net,1433; Database = studentfeedbackapp", "willredmondson", "Esther1Harvey2Will3");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "willredmondson@gc0216", "pwd" => "Esther1Harvey2Will3", "Database" => "studentfeedbackapp", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:gc0216.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>