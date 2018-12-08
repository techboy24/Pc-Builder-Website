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
	<title>About Us</title>
	<link rel="icon" href="images/logo1.png">
	<link rel="stylesheet" type="text/css" href="css/page1.css">
	<link rel="stylesheet" type="text/css" href="css/aboutus.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/8626F43A-826A-CC4D-A787-9C9F5F21CA09/main.js" charset="UTF-8"></script>
</head>
<body>
<div class="animatebottom">
	<header>
		<h1 text-align="center">BUILD YOUR PC</h1>
		<nav>
		<ul style="list-style-type:none">
			<li><a href="page2.php">Home</a></li>
			<li><a href="showproducts/fetch_cpu.php">Build Machine</a></li>
			<li><a href="aboutus.php" class="active">About Us </a></li>
			<li><a href="showproducts/completed.php">Completed Builds</a></li>
		</ul>
		</nav>
	</header>
	<hr/>
	<article><h3>WE ENVISION A WORLD WHERE THE PC IS THE ONLY PLATFORM</h3><br/><h6>FOR A DEEPER ,MORE IMMERSIVE COMPUTING EXPERIENCE</h6></article>
	<hr/>
	<details><summary>In-shop service</summary><br/>
	<p>We offer A+ technical support that includes custom built, upgrades, installations, diagnostics, maintenance and much more. Our knowledgeable staff will be glad to provide you the best possible information to help you make the smartest decisions. Over the years our fast growing customer base has been noticeably increased each year, making PC CONCEPT your computer repair expert of choice in the area.</p></details>


<div id="m_container">
	<div id="m_contact">
		<div id="map"></div>
		<div text-align="center">
		<b>Service counter to serve you better.</b><br/>
		<u><i>Working Hours : MON-FRI 9AM-5AM</i></u><br/>
		Survey No. 12, Opp. Hypercity Mall, Kasarvadavali, Ghodbunder Road, Thane West, Thane, Maharashtra 400615.
		</div>
		
	</div>


<div id="m_about">
		<h3 text-align="center" style="font-size: 150%;">Who are we?</h3>
		<dl class='fam'>
			<dt> Overview </dt><br/>
					<dd>We offer lower prices, wide selection of products, fast shipping and total commitment to customer service. We provide customer service 24 hours a day, 7 days a week. You can contact us either thru our real time help desk or our personalized ticket support system. Our support system allows us to build and maintain a close relationship with our users by keeping record of all their support enquiry, this provides a better service with the possibility to track their history. We strive to maintain our response time as quick as possible or simply guide you through our website in real time.</dd><br/><br/>
			<dt> Company Mission </dt><br/>
					<dd>PCBUILDER is part of an IT business network. A privately own organization with extensive years of experience in the computer industry. PCBUILDER strive to have the most aggressive price policy in response to multiple discounted-value web-based competitors.Our goal is to become the ultimate destination for all your computer hardware needs at the best value.
			</dd><br/><br/>
			<dt> Highly competitive in the market </dt><br/>
			<dd>	Years of experience in the computer industry. Professional purchasing team. Fast turnaround time between distributors PCBUILDER and you. Strong relationship with vendors and suppliers. Strong purchasing volume. Wide supply network in Canada. Constant and automated price adjustments. PCBUILDER strive to have the most aggressive price policy in response to multiple discounted-value web-based competitors. Our support system allows us to build and maintain a close relationship with our users by keeping record of all their support enquiry, this provides a better service with the possibility to track their history.
			</dd><br/><br/>
		</dl>
	</div>
<div id="m_member">
	<div class="slideshow-container">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "Mrunal@123";
		$dbname="wdltry";
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
		}
		$sql="SELECT * FROM info";
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				//$path="media/";
				$name=$row['title'];
				//$file=$row['image'];
				$text=$row['description'];
				echo '<div class="mySlides">';
				//echo '<img src="images/1.jpg">';
				$file=$row["image"];
				echo $image."<br><br>";
				$path="media/";

					echo '<img src="'.$path.$file.'" style="width:300px;height:300px;">';
    				//echo '<img src="'.$pathx.$file.'" id="eventimg">';    
      				echo '<div class="overlay">';
     				echo $name;
       				 echo'<br><p>'.$text;
       				 echo '</p></div>';
       				 echo '</div>';

	
			}
		}
	?>

		<a class="prev" onclick="plusSlides(-1)" style="color : white;">next</a>
		<a class="next" onclick="plusSlides(1)" style="color : white;">prev</a>
</div>
</div>


<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<!--<?php
$servername = "localhost";
$username = "root";
$password = "Mrunal@123";
$dbname="wdltry";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

$sql="SELECT * FROM info";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo "Data Fetched <br>";
while($row = $result->fetch_assoc()) {
echo "id : ".$row["id"]."<br>"."Title : ".$row["title"]."<br><br>";
/*$file=$row["image"];
echo $image."<br><br>";
$path="media/";

echo '<img src="'.$path.$file.'">';*/

}
}
else
{
echo "0 result";
}
?> -->
 <script>
    function initMap(){
      var options = {
        zoom:10,
        center:{lat:19.2879,lng:72.9672}
      }
      var map = new google.maps.Map(document.getElementById('map'), options);


     
      
    }
  </script>
 <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjQXXu1b1236jTqX8dyhT0QjSwspBS0zA&callback=initMap">
    </script>
</div>
</body>
</html>
