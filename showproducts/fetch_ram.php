
<?php
session_start();
$_SESSION["mobo_number"]=$_POST['mobo'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>RAM</title>
    <link rel="icon" href="../images/logo1.png">
    <link rel="stylesheet" type="text/css" href="../css/page1.css">
    <link rel="stylesheet" type="text/css" href="../css/bmextra.css">
</head>
<body>
<?php include_once("../include.php"); ?>

<form  method="post" action="fetch_graphics_card.php">
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
echo "<table border='1px' id='displaytable'><tr><th>Select</th><th>Company</th><th>Product<br>Number</th><th>Frequency</th>
<th>Type</th><th>Capacity</th><th>Cost</th></tr>";
$sql=  "SELECT * FROM ram WHERE frequency <= '".$_SESSION["cpu_ram_frequency"]."' AND type = '".$_SESSION["cpu_ram_type"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $number = $row['number'];
        $frequency = $row['frequency'];
        $type = $row['type'];
        $capacity= $row['capacity'];
        $cost = $row['cost'];
        //$file = $row['images'];     // take product img name
        echo '<div class="r_ram">';
        //echo '<img src="'.$pathx.$file.'" id="eventimg">';
        echo '<tr>';
        echo'<td><input type="radio" required name="ram"  id="r_ram"  value="'.$number.'"  onclick="r_ram_call(this.value)">';   
        
        echo'<td>'.$company.'
        <td>'.$number.'
        <td>'.$frequency.'
        <td>'.$type.'
        <td>'.$capacity.'
        <td>'.$cost;
        //echo'<br><p>'.$text;      description goes here
        echo '</div>';
        echo '</tr>';

}
echo '</table>';
echo'<input type="submit" style="  margin-left:42%;width:20%;margin-top:2%;" class="m_mybutton button1"></button>';
$conn->close();
?>
<script>
    function r_ram_call(ram) {
        var x= ram;
        document.getElementById("showram").innerHTML="Ram Selected : "+x;
      
    }
</script>
<p id="showram"></p>
</form>
</div>
</body>
</html>