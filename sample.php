<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/page1.css">  
    <link rel="stylesheet" type="text/css" href="css/sample.css">  
</head>
<body>
		<div class="animatebottom">
                <div id="m_register">
                        <h1 align="center">Thank You For Registration.</h1>
                        <h3 align="center">Start the Journey Now!!</h3>
                        <br/><br/><hr/>
               </div>         
        </div>
<?php echo "hey";
?>
        <script>
                function countDown(secs,elem) {
                    var element = document.getElementById(elem);
                    element.innerHTML = secs+"...";
                    if(secs < 1) {
                        clearTimeout(timer);
                        <?php header("Location : login.html"); ?>
                    }
                    secs--;
                    var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                }
                </script>
                <div id="status"></div>
                <script>countDown(5,"status");</script>

        </body>
        </html>