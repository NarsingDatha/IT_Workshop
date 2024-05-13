<?php
echo "Processing form data";
?>
<br>
<?php
//check if form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//Retrieve from data
$name =$_POST["name"];
$email =$_POST["email"];
$message =$_POST["message"];//(processing tha data (eg: store in database send email,etc..)
//for simplicity,just echoing here
echo "Name:$name<br>";
echo "Email:$email<br>";
echo "Message:$message<br>";
}
?>


