

<!DOCTYPE html>
<html>
<head>
    <title>Motherboard</title>
    <link rel="icon" href="../images/logo1.png">
    <link rel="stylesheet" type="text/css" href="../css/page1.css">
    <link rel="stylesheet" type="text/css" href="../css/bmextra.css">
</head>
<body>
<?php include_once("../include.php"); ?>
<?php
session_start();
$_SESSION["cpu_number"]=$_POST['cpu'];
?>
	
<form  method="post" action="fetch_ram.php">


<?php

echo "<div id='session_print' style='position : fixed;display:block;top:3%;left:144px;'>";
echo "Logged in as: ".$_SESSION["loggedin_user"];
echo "</div>";


echo "<div id='logout' style='position : fixed;display:block;top:3%;right:144px;'>";
echo "<a href='../login.php' style='color:white;'>Logout</a>";
echo "</div>";

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Mrunal@123";
$dbname="pcbuilder";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);


$sql="SELECT * from processor WHERE number='".$_SESSION["cpu_number"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {   $_SESSION["company"] = $row['company'];
        $_SESSION["model"] = $row['model'];
        $_SESSION["cpu_generation"]=$row['generation'];
        $_SESSION["frequency"] = $row['frequency'];
        $_SESSION["cores"] = $row['cores'];
        $_SESSION["cpu_socket"]=$row['socket_pin'];
        $_SESSION["cpu_ram_frequency"] = $row['ram_frequency'];
        $_SESSION["cpu_ram_type"] = $row['ram_type'];
        $_SESSION["power"] = $row['power'];
        $_SESSION["cpu_cost"] = $row['cost'];
        $_SESSION["cpu_overclockable"]=$row['overclockable'];
    }





echo "<table border='1px' id='displaytable'><tr><th>Select</th><th>Company</th><th>Product<br>Number</th><th>CPU Socket</th><th>Supported<br>Generation</th><th>Graphics<br>Supported</th><th>Cost</th></tr>";

$sql="SELECT * FROM motherboard WHERE socket='".$_SESSION["cpu_socket"]."' AND generation >='".$_SESSION["cpu_generation"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {
        
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $number = $row['number'];
        $socket = $row['socket'];
        $generation = $row['generation'];
        $graphics_type = $row['graphics_type'];
        $cost = $row['cost'];
        //$file = $row['images'];     // take product img name
        echo "<tr>";
        echo '<div class="r_motherboard">';
        //echo '<img src="'.$pathx.$file.'" id="eventimg">';
        echo'<td><input type="radio" required name="mobo"  id="r_mobo"  value="'.$number.'"  onclick="r_mobo_call(this.value)">';    
        
        echo'<td>'.$company.'
        <td>'.$number.'
        <td>'.$socket.'
        <td>'.$generation.'
        <td>'.$graphics_type.'
        <td>'.$cost;
        
        //echo'<br><p>'.$text;      desc goes here
        echo '</div>';
        echo "</tr>";
}
echo "</table>";
echo'<input type="submit";width:20%;margin-top:2%;" class="m_mybutton button1"></button>';
$conn->close();
?>
<script>
    function r_mobo_call(mobo) {
        var x= mobo;
        document.getElementById("showmobo").innerHTML="Mobo selected : "+x;
      
    }
</script>
  <p id="showmobo"></p>
</div>

</body>
</html>