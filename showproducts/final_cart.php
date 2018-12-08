<?php

session_start();
$_SESSION["pc_case"]=$_POST['pcase'];

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Mrunal@123";
$dbname="pcbuilder";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);


$sql="SELECT * from users WHERE username ='".$_SESSION["loggedin_user"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
{
    $_SESSION["email"]=$row['email'];
}




$sql="SELECT * from processor WHERE number='".$_SESSION["cpu_number"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {   $_SESSION["c_company"] = $row['company'];
        $_SESSION["c_model"] = $row['model'];
        $_SESSION["c_cost"] = $row['cost'];
    }

$sql="SELECT * from motherboard WHERE number='".$_SESSION["mobo_number"]."'";
    $result=$conn->query($sql);
    while ($row=mysqli_fetch_assoc($result))
        {   $_SESSION["m_company"] = $row['company'];
            $_SESSION["m_cost"] = $row['cost'];
        }

        

        $sql="SELECT * from ram WHERE number='".$_SESSION["ram_number"]."'";
        $result=$conn->query($sql);
        while ($row=mysqli_fetch_assoc($result))
                {   $_SESSION["r_company"] = $row['company'];
                    $_SESSION["r_cost"] = $row['cost'];
                }


        $sql="SELECT * from graphics_card WHERE number='".$_SESSION["selected_gcard"]."'";
        $result=$conn->query($sql);
        while ($row=mysqli_fetch_assoc($result))
            {   $_SESSION["g_company"] = $row['company'];
                $_SESSION["g_cost"] = $row['cost'];
            }



            $sql="SELECT * from power_supply WHERE number='".$_SESSION["selected_psupply"]."'";
            $result=$conn->query($sql);
            while ($row=mysqli_fetch_assoc($result))
                    {   
                        $_SESSION["p_company"] = $row['company'];
                        $_SESSION["p_cost"] = $row['cost'];
                    }
    
    
            $sql="SELECT * from storage WHERE number='".$_SESSION["storage"]."'";
            $result=$conn->query($sql);
            while ($row=mysqli_fetch_assoc($result))
                    {   
                                $_SESSION["s_company"] = $row['company'];
                                $_SESSION["s_cost"] = $row['cost'];
                            } 
    
                      
            $sql="SELECT * from pc_case WHERE id='".$_SESSION["pc_case"]."'";
            $result=$conn->query($sql);
             while ($row=mysqli_fetch_assoc($result))
             {   $_SESSION["pc_company"] = $row['company'];
                    $_SESSION["pc_cost"] = $row['cost'];
             }


             $total_cost=($_SESSION["c_cost"]+$_SESSION["m_cost"]+$_SESSION["r_cost"]+$_SESSION["g_cost"]+$_SESSION["p_cost"]+$_SESSION["s_cost"]+$_SESSION["pc_cost"]);
                 
             
             $cart_number=rand(10000,99999);


             //$sql = "INSERT INTO `users` (`cart`) VALUES ('1234') WHERE username=''";




/*
$selected_pcase=$_POST['pcase']; 
session_start();
$_SESSION["pc_case"]=$selected_pcase;
?>
<html>
<head>
    <title>Build Machine</title>
</head>
<body>
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname="pcbuilder";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
$sql="SELECT * from motherboard WHERE number='".$_SESSION["mobo_number"]."'";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result))
    {
        //$imgpath ="media/products/motherboard/";
        $company = $row['company'];
        $number = $row['number'];
        $socket = $row['socket'];
        $generation = $row['generation'];
        $graphics_type = $row['graphics_type'];
        








echo "<br>CPU number:: ".$_SESSION["cpu_number"]."
<br>CPU Generation:: ".$_SESSION["cpu_genration"]."
<br>CPU socket:: ".$_SESSION["cpu_socket"]."
<br>Motherboard:: ".$_SESSION["mobo_number"]."
<br>Ram:: ".$_SESSION["ram_number"]."
<br>Graphics Card:: ".$_SESSION["gcard_number"]."
<br>pc_case:: ".$_SESSION["pc_case"];
?>



</body>
</html>*/
?>
  
<html>
	<head>
    <link rel="icon" href="../images/logo1.png">
		<meta charset="utf-8">
        <title>Invoice</title>
        <style>
            .invoicecontain{
                text-align:center;
                border-width :5px;
                border-style: double;
                border-color: black;
                display:inline-block;
                width:60%;
                left:400px;
                padding:1%;

            }

            img{
                width:150px;
                height:auto;
            }
            </style>
	</head>
	<body style="text-align:center;">
    <div class="invoicecontain">

        <span><img alt="BuildFreak Logo" src="../images/logo1.png"></span>
		<header>
       

			<h1>Invoice</h1>
			<address>
				<p><b>Build Freak</b></p>
				<p>A.P.Shah Institute of Technology,<br>Hypercity Mall,<br/>Kasarvadavli,<br/>Thane,Maharashtra 400615.</p>
				<p>(+91) 022-25973737</p>
			</address>
        </header>
        

		<article>
			<h1>Recipient</h1>
			<address>
				Email Id : &nbsp; <?php echo $_SESSION["email"]; ?>
            </address>
            </article>   
       <!-- <div class="invoicecontain">-->
			<table style="margin-left :40%;">
				<tr>
					<th>Invoice #</th>
					<td><?php echo $cart_number ?></td>
                </tr>
                <?php

                date_default_timezone_set("Asia/Kolkata");
                echo "<tr><th>Date : </th><td>".date('Y-m-d')."</td></tr><br/>";
                echo "<tr><th>Time : </th><td>".date("h-i-sa")."</td></tr><br/>";

                ?>
				
				
            </table>
        <!--</div>
        <div class="invoicecontain">-->

			<table  style="margin-left :40%;border-width:5px;border-color:black;border-style:solid;">
				
					<tr>
                        <th>Number</th>
						<th>Company</th>
						<th>Price</th>
					</tr>
				   				
					<tr>
                        <td><?php echo $_SESSION["cpu_number"]; ?></td>
						<td><?php echo $_SESSION["c_company"]; ?></td>
						<td><?php echo $_SESSION["c_cost"]; ?></td>
					</tr>
                
                    
                    <tr>
                        <td><?php echo $_SESSION["mobo_number"]; ?></td>
						<td><?php echo $_SESSION["m_company"]; ?></td>
						<td><?php echo $_SESSION["m_cost"]; ?></td>
                    </tr>
               
                    <tr>
                        <td><?php echo $_SESSION["ram_number"]; ?></td>
						<td><?php echo $_SESSION["r_company"]; ?></td>
						<td><?php echo $_SESSION["r_cost"]; ?></td>
                    </tr>
                    
                  
                    <tr>
                        <td><?php echo $_SESSION["selected_gcard"]; ?></td>
						<td><?php echo $_SESSION["g_company"]; ?></td>
						<td><?php echo $_SESSION["g_cost"]; ?></td>
                    </tr>
                   

                    <tr>
                        <td><?php echo $_SESSION["selected_psupply"]; ?></td>
						<td><?php echo $_SESSION["p_company"]; ?></td>
						<td><?php echo $_SESSION["p_cost"]; ?></td>
                    </tr>
                  
                    <tr>
                        <td><?php echo $_SESSION["storage"]; ?></td>
						<td><?php echo $_SESSION["s_company"]; ?></td>
						<td><?php echo $_SESSION["s_cost"]; ?></td>
                    </tr>
                  
                    <tr>
                        <td><?php echo $_SESSION["pc_case"]; ?></td>
						<td><?php echo $_SESSION["pc_company"]; ?></td>
						<td><?php echo $_SESSION["pc_cost"]; ?></td>
					</tr>
            
            </table>


			
			<table  style="margin-left :40%;">
				<tr>
					<th>Total</th>
					<td><?php echo $total_cost;?></td>
				</tr>
            </table>
            
       
        
		<aside>
			<h1>Additional Notes</h1>
			<div>
				<p>All Prices are Inclusive of taxes.</p>
			</div>
        </aside>

        <button onclick="printinvoice()">Print Invoice</button>
        <a href="../login.php">Home</a>
        
        </div>


        <script>
            function printinvoice()
            {
                window.print();
            }

            </script>
	</body>
</html>



