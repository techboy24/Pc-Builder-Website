<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="../css/page1.css">
	<link rel="stylesheet" type="text/css" href="../css/bmextra.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />

</head>
<body>
<div class="animatebottom">
	<header >
		<h1 align="center">BUILD YOUR PC</h1>
		<nav>
		<ul style="list-style-type:none">
			<li><a href="page2.html">Home</a></li>
			<li><a href="buildguides.html">Build Guides</a></li>
			<li><a href="buildmachine.html">Build Machine</a></li>
			<li><a href="aboutus.html" class="active">About Us </a></li>
			<li><a href="completed.html">Completed Builds</a></li>
		</ul>
		</nav>
    </header>

    <form method="post" action="fetch_mobo.php">
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Mrunal@123";
$dbname="pcbuilder";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
?>
<div id="display_container">
<table  id="displaytable"> <tr> <th> Select </th> <th>Company</th><th>Model</th><th>Product<br>Number</th> <th> Generation </th> <th>Base Clock </th> <th>Cores</th><th>Socket</th> <th>Ram <br>
Frequency</th> <th>Power</th><th>Overclockable</th><th>Cost</th></tr>
</table>
</div>


</div>
</body>
</html>