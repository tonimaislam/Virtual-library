<?php
if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $p_number = $_POST['p_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    
    $image = $_FILES['image']['name'];
    $tmpname = $_FILES = ['image']['tmp_name'];
    $uploc = 'uimg/'.$image;

    // Database connection
    $conn = mysqli_connect('localhost', 'root', '', 'virtual_library');
    if ($conn->connect_error) {
        // echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        if (isset($fullname) || isset($username) || isset($email) || isset($p_number) || isset($address) || isset($password) || isset($gender) || isset($image)) {
            
            $stmt = $conn->prepare("insert into registration(fullname, username, email, p_number, address, password, gender, image) values(?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $fullname, $username, $email, $p_number, $address, $password, $gender, $image);
            move_uploaded_file($tmpname,$uploc);
            $execval = $stmt->execute();
            echo $execval;
            // header("location:log.php");
            $stmt->close();
            $conn->close();
            header("location:log.php");
        }
        // header("location:log.php");
    }
}
?>