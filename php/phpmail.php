<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta>
    <title>Page Title</title>
    <link rel="icon" href="../images/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/page1.css" />
    <link rel="stylesheet" type="text/css" href="../css/form.css"> 
</head>
<body>
<div class="animatebottom">
		
	<header id="header" >
		<h1 text-align="center">BUILD YOUR PC</h1>
	</header>
<form action="test.php" method="POST">

<?php


session_start();
$_SESSION["fullname"]=$_POST["fullname"];
$_SESSION["username"]=$_POST['userid'];
$_SESSION["emailid"]=$_POST["eid"];
$_SESSION["passwd"]=md5($_POST['passwd']);
///////////////////////////////////////////////
?>
<div id='formbox' style="height:20%;" >
<?php
echo "<br><br><label for='userinput'> Now Check your E-mail :</label><input name=userinput placeholder='Enter your verfication code' type='text' style='outline: none;margin-left: 20em;background: transparent; border: 0;border-bottom: 1px solid  black; -webkit-text-fill-color: black;' required >";
sendmail();
function sendmail()
{
$verification_code=rand(1000,9999);
$_SESSION["vcode"]=$verification_code;
//echo "code is".$_SESSION["vcode"];
/*
--------------------------------------------------------------------------------------------------
We are using php mail package to send an email from smtp server (Gmail in our case). 
You can use other services
if you are using gmail server then use gmail account only.
--------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------
For Ubuntu install the packages using terminal
Commands: 1) pear install Mail
          2) pear install Net_SMTP   
Net_SMTP Provides an implementation of the SMTP protocol  
--------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------
Gmail account instructions.
1) Disable Two step varification of your account.
2) Enable access for less secure apps. steps --> https://support.google.com/a/answer/6260879 
--------------------------------------------------------------------------------------------------
For More info
PHP Mail -> https://pear.php.net/manual/en/package.mail.mail.php
Google SMTP server -> https://support.google.com/a/answer/176600?hl=en
*/require_once "Mail.php";                                                // Including mail script

$from = '<pcbuilderapsit@gmail.com>';                                   //sender's email id
//taking email id form html form.
$subject = 'Verification Process!';   
$body = "Hi!".$_SESSION["fullname"]."This is your verification code. ".$_SESSION["vcode"]." Please use this code to become a verified user.";                                  

$headers = array(                                                      //making an header of mail
'From' => $from,
'To' => $_SESSION["emailid"],
'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(                                    // Mail::factory() creates mailer instance // smtp is type of backend  
'host' => 'ssl://smtp.gmail.com',                               //name of host
'port' => '465',                                                // port number of smtp server
'auth' => true,                                                 //SMTP Authentication true. because we need to authenticate with gmail username and password
'username' => 'pcbuilderapsit@gmail.com',                       //mail of sender(Only gmail)
'password' => 'Tupperware@312'                                  //password of account
));

$mail = $smtp->send($_SESSION["emailid"], $headers, $body);                              //   object-> send to send the mail,prameters are (recipient,email header,email body)

if (PEAR::isError($mail)) {                                             //  $mail returns a value on failure. PHP Exception Handling is used.
echo('<p>' . $mail->getMessage() . '</p>');
} else {
echo('<p>Successfully sent.....</p>');
}
////////////////////////
}
?>
<input type="submit" class="m_mybutton button1" id="m_hidb" >
</div>
<!--<input type="button" value="Resend Code" onclick="m2()"/>-->
</form>

</div>
</body>
</html>
