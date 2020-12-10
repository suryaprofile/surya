<!DOCTYPE>
<html>
<head response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title> port-table with database</title>

<!-- lib CSS Files -->
<link href="../lib/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>


<body>
<div class="table-responsive">
 <table class="table table-striped">
 <thead class="thead-dark text-uppercase">
<tr>
<th> id  </th>
<th> name  </th>
<th> email  </th>
<th>  subject </th>
<th>  message </th>
<th> reg_date  </th>
</tr>
</thead>
<?php
$conn= mysqli_connect("localhost", "root", "", "surya");
if ($conn-> connect_error){
 die("connection failed:".$conn-> connect_error);
}
$sql= "SELECT id, name, email, subject, message, reg_date from portfolio";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
while ($row = $result -> fetch_assoc()){
echo "<tr> <td>".$row["id"]."</td>  <td>" .$row["name"]."</td>  <td>" .$row["email"]."</td> <td>" .$row["subject"]."</td> <td>".$row["message"]."</td> <td>" .$row["reg_date"]."</td></tr>";
}
echo "</table>";
}
else {
echo "0 results";
}

$conn-> close ();

?>

</table>
</div>


<script src="../lib/jquery/jquery.min.js"> </script> 
<script src="../lib/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"> </script> 


</body>
</html>
