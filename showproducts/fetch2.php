<html>
<head>
    <title>Build Machine</title>
</head>
<body>
<form  method="post" action="fetch_mobo.php">
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname="pcbuilder";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);



function processor($conn)
{
    $sql=  "SELECT * FROM processor";
    $result=$conn->query($sql);
    
    while ($row=mysqli_fetch_assoc($result))
    {
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $model = $row['model'];
        $number = $row['number'];
        $generation = $row['generation'];
        $frequency = $row['frequency'];
        $cores = $row['cores'];
        $socket = $row['socket_pin'];
        $ram_frequency = $row['ram_frequency'];
        $ram_type = $row['ram_type'];
        $power = $row['power'];
        $cost = $row['cost'];
        $overclockable= $row['overclockable'];
        //$file = $row['images'];     // take product img name
        echo '<div class="r_processor">';

        //echo '<img src="'.$pathx.$file.'" id="eventimg">'; 
        echo'<input type="radio" required name="cpu"  id="r_cpu"  value="'.$row.'"  onclick="r_cpu_call(this.value)">';   
        echo'<br>Company:'.$company;
        echo'<br>Model:'.$model;
        echo'<br>Product Number:'.$number;
        echo'<br>Generation:'.$generation;
        echo'<br>Base Clock:'.$frequency;
        echo'<br>Number of Cores:'.$cores;
        echo'<br>CPU SOCKET:'.$socket;
        echo'<br>Supported Ram Frequency:'.$ram_frequency;
        echo'<br>Required Power Supply:'.$power;
        echo'<br>Overclockable:'.$overclockable;
        echo'<br>Cost:'.$cost;
        //echo'<br><p>'.$text;      desc goes here
        echo '</div>';

    }
    echo'<input type="submit" ></button>';
}      


$userchoice=$_GET['drop'];  //get value from html page
$userchoice($conn); //call   that function 

$conn->close();
?>
<script>
    function r_cpu_call(cpu) {
        var x= cpu;
        document.getElementById("demo1").innerHTML="CPU selected : "+x;
      
    }
</script>    

<p id="demo1">hey hey!!</p>

</form>
</body>
</html>