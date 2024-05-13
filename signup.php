<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Form Login and Register</title>
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="signup">
 <h1>Sign Up</h1>
 <h4>It's free and only takes a minute</h4>
 <form action="verify.php" method="post">
 <label>First Name</label>
 <input type="text" name="fname" required>
 <label>Last Name</label>
 <input type="text" name="lname" required>
 <label>Gender</label>
 <input type="text" name="gender" required>
 <label>Contact Address</label>
 <input type="text" name="number" required>
 <label>Address</label>
 <input type="text" name="address" required>
 <label>Email</label>
 <input type="email" name="email" required>
 <label>Password</label>
 <input type="password" name="pass" required>
 <input type="submit" value="Submit">
 
 </form>
 <p>By clicking the sign up button, you agree to our<br>
 <a href="">Terms and Conditions</a> and <a href="login.php">Privacy Policy</a></p>
 </div>
 </body>
</html>
