<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('quexf');
$sql="SELECT label, COUNT(f.bid) AS total
FROM boxes b LEFT JOIN formboxverifychar f ON b.bid = f.bid
WHERE b.bid=41 OR b.bid=42 OR b.bid=43 OR b.bid=44 OR b.bid=45
GROUP BY label
ORDER BY b.bid";
$records = mysql_query($sql);
?>
<html>
<head>
<title>Data table</title>
</head>
<body>

<table width"600" border="1" cellpadding="5" cellspacing="1">

<tr>
<th>Option</th>
<th>Total</th>
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