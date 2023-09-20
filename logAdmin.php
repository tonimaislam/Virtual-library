
<?php
session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
// echo $name;

    $con = new mysqli("localhost", "root", "", "virtual_library");
    if ($con->connect_errno) {
        die("Failed to connect: " . $con->connect_errno);
    } else {
        $stmt = $con->prepare("select * from registrationAdmin where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        // echo $stmt_result->num_rows;
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] == $password) {
                $_SESSION['usernameAdmin']=$username;
                header("location:profileAdmin.php");
            } else {
                echo "<h2>Invalid password.</h2>";
            }
        } else {
            echo "<h2>Invalid username.</h2>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Virtual Library</title>
  <link rel="stylesheet" href="log.css">
</head>

<body>
  <div class="center">

    <h1>Login As An Admin</h1>
    <form method="post">

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
        Not a member? <a href="regAdmin.php">Signup</a>
      </div>
      
    </form>
  </div>

</body>

</html>