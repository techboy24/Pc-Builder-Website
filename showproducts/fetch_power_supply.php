<?php
session_start();
$_SESSION["selected_gcard"]=$_POST['gcard'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Power Supply</title>
    <link rel="icon" href="../images/logo1.png">
    <link rel="stylesheet" type="text/css" href="../css/page1.css">
    <link rel="stylesheet" type="text/css" href="../css/bmextra.css">
</head>
<body>
<?php include_once("../include.php"); ?>

<form  method="post" action="fetch_storage.php">
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

echo '<table border="1px" id="displaytable"> <tr> <th> Select </th> <th>Company</th><th>Product<br>Number</th><th> Watts</th><th>Cost</th>';

$sql=  "SELECT * FROM power_supply";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $number = $row['number'];
        $watts = $row['watts'];
        $cost = $row['cost'];
        //$file = $row['images'];     // take product img name
        echo '<tr>';
        echo '<div class="r_graphics_card">';
        echo'<td><input type="radio" required name="s_supply"  id="p_supply"  value="'.$number.'"  onclick="r_psupply_call(this.value)">'; 
        //echo '<img src="'.$pathx.$file.'" id="eventimg">';    
        
        echo'<td>'.$company.'
        <td>'.$number.'
        <td>'.$watts.'
        <td>'.$cost;

        //echo'<br><p>'.$text;desc goes here
        echo '</div>';
        echo '</tr>';
   
}
echo '</table>';
echo'<input type="submit" style="  margin-left:42%;width:20%;margin-top:2%;" class="m_mybutton button1"></button>';
$conn->close();
?>
<script>
    function r_psupply_call(s_supply) {
        var x= s_supply;
        document.getElementById("showsupply").innerHTML="Power Supply Selected : "+x;
      
    }
</script>
<p id="showsupply"></p>
</div>
</body>
</html>