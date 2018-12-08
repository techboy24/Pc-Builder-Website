<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="icon" href="images/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/page1.css">  
    <link rel="stylesheet" type="text/css" href="css/sample.css">  
    <link rel="stylesheet" type="text/css" href="css/form.css">  
</head>
<body>
		<div class="animatebottom">
        <header >
		<h1 align="center">BUILD YOUR PC</h1>
		
	    </header>
                <div id="m_register">
                        <h1 align="center">Thank You For Registration.</h1>
                        <h3 align="center">Start the Journey Now!!</h3>
                        <br/><br/>
                        <div id="status"></div>
                        <hr/>
               </div>         




        <script>
                function countDown(secs,elem) {
                    var element = document.getElementById(elem);
                    element.innerHTML ="<h3 style='text-align=center;color:white;'>You will be redirected in "+ secs+" secs...<h3>";
                    if(secs < 1) {
                        clearTimeout(timer);
                        location.replace("login.php")
                      
                    }
                   
                    secs--;
                    var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                    
                }
                </script>
                
                <script>countDown(10,"status");</script>
                </div>
        </body>
        </html>