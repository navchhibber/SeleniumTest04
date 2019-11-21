<!DOCTYPE php>
<html>
<head><style> body {background-image:url(QZyE7l.jpg)}
</style>

<script src='v.js'>
</script>
</head>
<body>
<header>
<b>Enter Info: </b>

<form action="submit.php" method="post" onsubmit="return abc()">
<table>

<tr><td>Seller Name:</td>
<td><input id="Name" type="text" placeholder="Name" name="Name" > </td> </tr>

<tr><td>Address:</td>
<td><input id="address" type="text" placeholder="Address" name="address"> </td></tr>

<tr><td>City:</td>
<td><input id="city" type="text" placeholder="City" name="city"> </td></tr>

<tr><td>Phone Number:</td>
<td><input id="mobile" type="text" pattern="^\(\d{3}\)\d{3}-\d{4}$|^\d{3}-\d{3}-\d{4}$" placeholder="123-123-1234" name="mobile"> </td></tr>

<tr><td>Email Address:</td>
<td><input id="email" type="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="Email" name="email"></td></tr>

<tr><td>Vehicle Make:</td>
<td><input id="make" type="text" placeholder="Make" name="make"> </td></tr>

<tr><td> Model:</td>
<td><input id="model" type="text" placeholder="Model" name="model"></td></tr>

<tr><td>Year:</td>
<td><input id="year" type="text" placeholder="Year" name="year"> </td></tr>

<tr><td> </td>
<td> <input type="submit" value="Submit" >   <a href="Parent.html"><button> Home</button> </a> </td></tr>


</table>
</form>
</header>
</body>
</html>