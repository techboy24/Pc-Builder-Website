<?php
 session_start();
$_SESSION["storage"]=$_POST['storage'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Build Machine</title>
    <link rel="stylesheet" type="text/css" href="../css/page1.css">
    <link rel="stylesheet" type="text/css" href="../css/bmextra.css">
</head>
<body>
<?php include_once("../include.php"); ?>

    <form  method="post" action="final_cart.php">
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


echo '<table border="1px" id="displaytable"><tr><th>Select</th><th>Company</th><th>Product<br>Number</th><th>Cost</th></tr>';


// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);

    $sql=  "SELECT * FROM pc_case";
    $result=$conn->query($sql);
    while ($row=mysqli_fetch_assoc($result))
    {
        echo '<tr>';
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $number = $row['id'];
        $cost = $row['cost'];
        //$file = $row['images'];     // take product img name
        echo '<div class="r_pc_case">';
        //echo '<img src="'.$pathx.$file.'" id="eventimg">';
        echo'<td><input type="radio" required name="pcase"  id="r_pcase"  value="'.$number.'"  onclick="r_pcase_call(this.value)">';
        echo'<td>'.$company.'
       <td> '.$number.'
        <td>'.$cost;
        
        //echo'<br><p>'.$text;      desc goes here
        echo '</div>';
        echo '</tr>';

}
echo '<table>';
echo'<input type="submit" style="  margin-left:42%;width:20%;margin-top:2%;" class="m_mybutton button1" ></button>';
$conn->close();
?>

<script>
    function r_pcase_call(pcase) {
        var x= pcase;
        document.getElementById("demo2").innerHTML="Pc case Selected : "+x;
      
    }
</script>  
<p id="demo2"></p>
</form>
</div>
</body>
</html>