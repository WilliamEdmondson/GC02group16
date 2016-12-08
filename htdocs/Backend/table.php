<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('quexf');
$sql="SELECT label, COUNT(f.bid) AS total FROM boxes b JOIN formboxverifychar f ON b.bid = f.bid WHERE f.bid=224 OR f.bid=225 GROUP BY label";
$records = mysql_query($sql);
?>
<html>
<head>
<title>Data table</title>
</head>
<body>

<table width"600" border="1" cellpadding="1" cellspacing="1">

<tr>
<th>Gender</th>
<th>Number</th>
</tr>

<?php
	while ($quexf=mysql_fetch_assoc($records)) {
		echo "<tr>";
		echo "<td>".$quexf['label']."</td>";
		echo "<td>".$quexf['total']."</td>";
		echo "</tr>";
	}
?>

</table>
	
</body>
</html>