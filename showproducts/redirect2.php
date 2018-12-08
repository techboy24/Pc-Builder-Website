<?php
session_start();


$_SESSION["cpu_number"]="6100";

$_SESSION["mobo_number"]="X99";

$_SESSION["ram_number"]="CMU16GX4M2A2666C16";

$_SESSION["selected_gcard"]="Gtx 1080 Ti";

$_SESSION["selected_psupply"]="HX750";

$_SESSION["storage"]="ST2000DM006";

$_SESSION["pc_case"]="G21";

header("location: final_cart.php");
?>
