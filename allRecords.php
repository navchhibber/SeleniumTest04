<?php include 'DatabaseConnection.php';
?>
<html>
<head>
<title>All Saved Records</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<body>
<header>
<table class ="tab">
<tr class="tab">
	<th class="tab">Name</th> 
	<th class="tab">Address</th> 
	<th class="tab">City</th> 
	<th class="tab">Mobile Number</th> 
	<th class="tab">Email</th> 
	<th class="tab">Make</th> 
	<th class="tab">Model</th> 	
	<th class="tab">Year</th>
	<th class="tab">URL</th>
</tr>
<?php
$stringQuery = "SELECT * from assignment ORDER BY ID DESC;";
$tableData = $connection->query($stringQuery);
while ($s = $tableData->fetch_assoc())
{
echo '<tr class="tab">
	<td class="tab">'. $s["Name"].'</td>
	<td class="tab">'. $s["Address"].'</td>
	<td class="tab">'. $s["City"].'</td>
 	<td class="tab">'. $s["Mobile"].'</td>
 	<td class="tab">'. $s["Email"].'</td>
 	<td class="tab">'. $s["Make"].'</td>
 	<td class="tab">'. $s["Model"].'</td>
 	<td class="tab">'. $s["Year"].'</td>';
	echo '<td class="tab"><a href="'. $s["URL"].'">'. $s["URL"]."</a></td>
</tr>";
}

echo "";
echo "</table>";
?>
</table>
<br>
<a href="Parent.html"><button> Home</button> </a>
</header>
</body>
</head>
</html>