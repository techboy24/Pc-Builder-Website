<?php
session_start();

$_SESSION["cpu_number"]="6100";

$_SESSION["mobo_number"]="GA-H110M-S2";

$_SESSION["ram_number"]="HX424C15FB2";

$_SESSION["selected_gcard"]="GT 710";

$_SESSION["selected_psupply"]="E-500B";

$_SESSION["storage"]="SATA";

$_SESSION["pc_case"]="CONQUER";


header("location: final_cart.php");
?>


