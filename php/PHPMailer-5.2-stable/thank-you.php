<!DOCTYPE>
<html>
<head response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Thank you!</title>
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

<h2 class="text-center text-success mt-5">
Success! </h2>
<?php

if(!isset($_POST['submit']))

{	
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "
<h3 class='text-center text-success mt-3'>
     Your message has been sent. Thank you!  ' . $name . ', we will contact you shortly.</h3>";
}
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

	



