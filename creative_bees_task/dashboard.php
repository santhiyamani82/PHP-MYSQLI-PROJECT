<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Dashboard</title>
  
</head>
<body>
<h1 style="text-align:center; color:green;">Welcome to Dashboard</h1>
<?php
include("user-details.php");

$userDetails = getUserbyId();

$firstName = $userDetails['firstname'];
$lastName = $userDetails['lastname'];
$fullName = $firstName." ".$lastName;
?>
<h3><?php echo $fullName; ?></h3>
<a href="logout.php">Logout</a>
</body>
</html>