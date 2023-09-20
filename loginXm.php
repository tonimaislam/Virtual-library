<?php

session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
// echo $name;

    $con = new mysqli("localhost", "root", "", "virtual_library");
    //include 'connect.php';
    if ($con->connect_errno) {
        die("Failed to connect: " . $con->connect_errno);
    } else {
        $stmt = $con->prepare("select * from registration where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        // echo $stmt_result->num_rows;
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] == $password) {
                $_SESSION['username']=$username;//insert session globalley
                header("location:home.php");
            } else {
                echo "<h2>Invalid password.</h2>";
            }
        } else {
            echo "<h2>Invalid username.</h2>";
        }
    }
}
?>