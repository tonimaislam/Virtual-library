<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Virtual Library</title>
  <link rel="stylesheet" href="log.css">
</head>

<body>
  <div class="center">

    <h1>Login</h1>
    <form action="loginXm.php" method="post">

      <div class="txt_field">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>

      <div class="txt_field">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>

      <div class="pass">Forgot Password?</div>

      <input type="submit" value="Login" name="login">

      <div class="signup_link">
        Not a member? <a href="reg.php">Signup</a><br>
        <a href="logAdmin.php">Login as an Admin</a>
      </div>
      
    </form>
  </div>

</body>

</html>