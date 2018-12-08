<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link rel="icon" href="images/logo1.png">
	<link rel="stylesheet" type="text/css" href="css/page1.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">  
</head>
<body>
<script>
      $(document).ready(function() {
         function disablePrev() { window.history.forward() }
         window.onload = disablePrev();
         window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
      });
   </script>
	<div >
	<header >
		<h1 align="center">BUILD YOUR PC</h1>
		<nav>
		<ul style="list-style-type: none">
			<li><a href="index.html"><img src="images/back.png"/>Home</a></li>
		</ul>
		</nav>
	</header>
	</div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
	<div id="formbox">
		<h3 align="center">Log In</h3>
		<hr>
		<br/>
		<input type="text"name="userid" placeholder="User Id"  style="outline: none;background: transparent; border: 0;border-bottom: 1px solid  black; -webkit-text-fill-color: black;" required><br/><br/>


		<input type="password" name="passwd" placeholder="Enter Your Password"style="outline: none;background: transparent; border: 0;border-bottom: 1px solid  black; -webkit-text-fill-color: black;" maxlength="8" required><br/><br/>


		<br/>
		<input type="submit" class="m_mybutton button1 " name="loginbutton"><br/><br/>



		</div>
	</form>

</body>
</html>


<?php 



session_start();
$_SESSION = array();
session_destroy();

session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Mrunal@123";
$dbname="pcbuilder";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$loggedin_user=$_POST['userid'];
	$loggedin_passwrd=md5($_POST['passwd']);
	$sql ="SELECT * FROM users where username='$loggedin_user' ";
	$result=$conn->query($sql);
	while ($row=mysqli_fetch_assoc($result))
	 {
		$password=$row['password'];
		//$salt;
	}
	if($loggedin_passwrd == $password)
	{
		
		$_SESSION["loggedin_user"]=$loggedin_user;
		header("Location: page2.php");
	}
	else{
		echo "<script> alert('Sorry...Try Again'); </script> ";
	}
}



?>