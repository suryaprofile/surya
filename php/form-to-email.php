<!DOCTYPE>
<html>
<head response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>form-to-email</title>
<!-- Google Fonts -->
<link href="font.css" rel="stylesheet">

<!-- lib CSS Files -->
<link href="lib/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="lib/icofont/icofont.min.css" rel="stylesheet">
<link href="lib/boxicons-master/css/boxicons.min.css" rel="stylesheet">
<link href="lib/VenoBox-master/venobox/venobox.css" rel="stylesheet">
<link href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/animation/aos.css" rel="stylesheet">
<!--  Main CSS File -->
<link href="style.css" rel="stylesheet">
</head>

<body>




<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "<h2 class='text-danger text-center mt-5'> You need to fill  all the inputs in form!</h2>";
}
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


//done. redirect to thank-you page.
header('Location:PHPMailer-5.2-stable/thank-you.html');





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
  echo " <h1 style='color:green;'> New record created successfully </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!--  lib js File --> 

<script src="lib/jquery/jquery.min.js"> </script> 
<script src="lib/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"> </script> 
<script src="lib/jquery.easing/jquery.easing.min.js"> </script> 
<script src="lib/php-email-form/validate.js"> </script> 
<script src="lib/boxicons-master/dist/boxicons.js"> </script> 
<script src="lib/waypoints/jquery.waypoints.min.js"> </script> 
<script src="lib/counterup/counterup.min.js"> </script> 
<script src="lib/isotope-layout/isotope.pkgd.min.js"> </script> 
<script src="lib/VenoBox-master/venobox/venobox.min.js"> </script> 
<script src="lib/typed.js/typed.min.js"> </script> 
<script src="lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"> </script> 
<script src="lib/animation/aos.js"> </script> 

<!--  Main js File --> 
<script src="javascript.js"> </script>
</body>
</html>
