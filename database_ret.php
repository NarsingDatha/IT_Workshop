<?php
include("databaseconnection.php");

$query = "SELECT * FROM phptable1";

$result = mysqli_query($con, $query);

foreach ($result as $row)
{

echo "<p><strong>ID:</strong> ".$row['id']."</p>";
echo "<p><strong>First Name:</strong> ".$row['fname']."</p>";
echo "<p><strong>Last Name:</strong> ".$row['lname']."</p>";
echo "<p><strong>Gender:</strong> ".$row['gender']."</p>";
echo "<p><strong>Phone Number:</strong> ".$row['cnum']."</p>";
echo "<p><strong>Address:</strong> ".$row['address']."</p>";
echo "<p><strong>Email:</strong> ".$row['email']."</p>";
echo "<p><strong>Password:</strong> ".$row['pass']."</p>";
}

?>
