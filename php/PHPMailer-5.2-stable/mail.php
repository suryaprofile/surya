<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>submit page</title>
<link href="../../lib/google font/font.css" rel="stylesheet">

<!-- lib CSS Files -->
<link href="../../lib/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../lib/icofont/icofont.min.css" rel="stylesheet">
<link href="../../lib/boxicons-master/css/boxicons.min.css" rel="stylesheet">
<link href="../../lib/VenoBox-master/venobox/venobox.css" rel="stylesheet">
<link href="../../lib/animation/aos.css" rel="stylesheet">
<!--  Main CSS File -->
<link href="../../style.css" rel="stylesheet">
<style>
.container {
	margin: auto;
	margin-top: 82px;
	background: transparent;
	font-family: "open sarif";
	text-align: center;
}
.suc {
	padding: 10px 30px;
}
.suc i {
	text-align: center;
	color: #fff;
	font-size: 80px;
}
h5, h1 {
	line-height: 1.5;
	color: #fff;
}
</style>
</head>
<body style="background: url(../../img/bg_image/7.jpg)">
	
	
	
	
	
	
	
<?php

if(!isset($_POST['submit']))
{
	
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require 'PHPMailerAutoload.php';

	$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail = new PHPMailer;

/*$mail->SMTPDebug = 4;         */                      // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'suryanarayana.pottipati1995@gmail.com';                 // SMTP username
$mail->Password = 'S8332929773';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

     //Recipients
    $mail->setFrom('suryanarayana.pottipati1995@gmail.com', 'Surya');
    $mail->addAddress('suryanarayana.pottipati1995@gmail.com');     // Add a recipient
                 
    $mail->addReplyTo('suryanarayana.pottipati1995@gmail.com', 'Information');
   


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "<b>Name :</b>&nbsp;&nbsp; " . $name."<br>" . "<b>Email :&nbsp;&nbsp; </b> " . $email ."<br>". "<b>Subject :</b> &nbsp;&nbsp;".$subject."<br>". "<b> Message : &nbsp;&nbsp;</b>" . $_POST['message'];
   



if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<div class='container suc'><i class='bx bxs-message-rounded-check bx-tada'></i><h1 class='text-center  mt-3'> Success <br> </h1>
    <h5 class='text-center mt-3'> Your message has been sent. Thank you! <br>  $name <br> we will contact you shortly.</h5></div>";
}
}
?>
<?php
if(!isset($_POST['submit']))

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($email)||empty ($message)) 
{
    echo "<h4 class='text-danger text-center mt-3'> Name, email and message are mandatory!";
    exit;
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="surya";


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO portfolio (name, email, subject, message)
  VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";




if ($conn->query($sql) === TRUE) {
 /* echo " <h1 style='color:green;'> New record created successfully </h1>";*/
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!--  lib js File --> 

<script src="../../lib/jquery/jquery.min.js"> </script> 
<script src="../../lib/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"> </script> 
<script src="../../lib/jquery.easing/jquery.easing.min.js"> </script> 
<script src="../../lib/php-email-form/validate.js"> </script> 
<script src="../../lib/boxicons-master/dist/boxicons.js"> </script> 
<script src="../../lib/waypoints/jquery.waypoints.min.js"> </script> 
<script src="../../lib/counterup/counterup.min.js"> </script> 
<script src="../../lib/isotope-layout/isotope.pkgd.min.js"> </script> 
<script src="../../lib/VenoBox-master/venobox/venobox.min.js"> </script> 
<script src="../../lib/typed.js/typed.min.js"> </script> 
<script src="../../lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"> </script> 
<script src="../../lib/animation/aos.js"> </script> 

<!--  Main js File --> 
<script src="../../javascript.js"> </script>
</body>
</html>
