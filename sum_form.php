<?php
echo "Processing form data";
?>
<br>
<?php
//check if form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//Retrieve from data
$number1 =$_POST["number1"];
$number2 =$_POST["number2"];

//(processing tha data (eg: store in database send email,etc..)
//for simplicity,just echoing here
echo "entered number 1:$number1<br>";
echo "entered number 2:$number2<br>";
echo "the sum of $number1 and $number2 is".$number1 + $number2;
}
?>
