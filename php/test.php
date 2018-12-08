<?php
$userinput=$_POST["userinput"];

session_start();
$fullname=$_SESSION["fullname"];
$username=$_SESSION["username"];
$emailid=$_SESSION["emailid"];
$passwd=$_SESSION["passwd"];
if ($userinput == $_SESSION["vcode"])
{
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Mrunal@123";
$dbname="pcbuilder";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
$sql = "INSERT INTO `users` (`username`, `fullname`, `password`,`email`, `verified`, `cart`) VALUES ('$username','$fullname','$passwd','$emailid',1,NULL)";
if ($conn->query($sql) == TRUE)
    {
        header("Location: ../redirect.php");
    }      
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else {

    echo "Oops Failed.Try again...";    
}

?>