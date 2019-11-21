<?php include 'DatabaseConnection.php';
$Name = $_REQUEST['Name'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$make = $_REQUEST['make'];
$make = preg_replace('/\s+/', '-', $make);
$model = $_REQUEST['model'];
$model = preg_replace('/\s+/', '-', $model);
$year = $_REQUEST['year'];
$URL = "https://jdpower.com/Cars/$year/$make/$model";

$squery= "INSERT INTO `assignment`(`Name`, `Address`, `City`, `Mobile`, `Email`, `Make`, `Model`, `Year`, `URL`) VALUES ('$Name','$address','$city','$mobile','$email','$make','$model','$year','$URL')";

$connection->query($squery);
?>

<html>
<script src ="validations.js"></script>
<head>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<header>
<table  class="tab">
<tr class="tab">
<th class="tab">Name</th>
<th class="tab">Address</th>
<th class="tab">City</th>
<th class="tab">Contact</th>
<th class="tab">Email</th>
<th class="tab">Make</th>
<th class="tab">Model</th>
<th class="tab">Year</th>
<th class="tab">URL</th>
</tr>
<tr class="tab">
<td class="tab"><?php echo $Name; ?></td>
<td class="tab"><?php echo $address; ?></td>
<td class="tab"><?php echo $city; ?></td>
<td class="tab"><?php echo $mobile; ?></td>
<td class="tab"><?php echo $email; ?></td>
<td class="tab"><?php echo $make; ?></td>
<td class="tab"><?php echo $model; ?></td>
<td class="tab"><?php echo $year; ?></td>
<td class="tab">
<a id="url" href="<?php echo $URL; ?>"><?php echo $URL; ?>
</a></td>
</tr>
</table>
<br>
<a href="Parent.html"><button> Home</button> </a>
<header>
</body>
</html>