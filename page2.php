<?php

session_start();

echo "<div id='session_print' style='position : fixed;display:block;top:3%;left:144px;'>";
echo "Logged in as: ".$_SESSION["loggedin_user"];
echo "</div>";


echo "<a href='login.php'>Logout</a>";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pc Part-Picker</title>
	<link rel="icon" href="images/logo1.png">
	<link rel="stylesheet" type="text/css" href="css/page1.css">  
	<link rel="stylesheet" type="text/css" href="css/page2extra.css"> 
</head>
<body>
	<div class="animatebottom" >
	<header >
		<h1>BUILD YOUR PC</h1>
		<!--<nav>
		<ul style="list-style-type:none">
			<li><a href="page2.html" class="active">Home</a></li>
			<li><a href="buildguides.html">Build Guides</a></li>
			<li><a href="buildmachine.html">Build Machine</a></li>
			<li><a href="AboutUs.html">About Us </a></li>
			<li><a href="completed.html">Completed Builds</a></li>
		</ul>
		</nav>-->
	</header>
	<article>
	<div id="m_photocontainer1">
	<div id="wpc1">WHY BUILD YOUR <br/>OWN PC?<br/><hr/>
	 PC Builder Kits let you build a high-performance system that fits your needs. When the time comes to upgrade you’ll have the foundation to handle it yourself — making your investment pay off in the long run.<br/>
	 <a href="aboutus.php" class="m_link">About Us </a>
	</div>

	</div>
	</article>
	
	 
	<article>
 	<div id="m_photocontainer2">
	<div id="wpc2">THE BEST VALUE <br/>FOR YOUR DOLLAR<br/><br/><hr/>
 	Each Kit uses components hand-picked by our experts to provide the best value, performance and building experience.<br/>
 	<a href="showproducts/completed.php" class="m_link">Completed Builds</a>

 </div>
 	</div>
 	
	</article>
    <article style="height:1500px;">
 	<div id="m_photocontainer3">
	<div id="wpc3">BUILD WITH CONFIDENCE<br/><br/><hr/>
 	We have taken all the guesswork out of building your own high performance computer. Our experts have ensured every aspect of each PC Build Kit is compatible. Newegg has pooled years of experience to give you the confidence you need to successfully build a great PC. Our PC Build Kits and DIY tutorials were developed to take you through a build step by step. Buy with confidence: enjoy Newegg’s legendary customer service and no-hassle returns.<br/>
<a href="showproducts/fetch_cpu.php" class="m_link">Build Machine</a>
 </div>
 	
 	</div>
 	
	</article>


</div>


</body>
</html>
