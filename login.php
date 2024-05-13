<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Form Login and Register</title>
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="login">
 <h1>Login</h1>
 <form action="pass_verify.php" method="POST">
 <h4>It's free and only a minute</h4>
 <label>Email</label>
 <input type="email" name="mail" required>
 <label>Password</label>
 <input type="password" name="pass" required>
 <input type="submit" name="submit" value="Submit">
 </form>
 <p>Not have an account? <a href="signup.php">Sign up here</a></p>
 </div>
 </body>
 </html>
