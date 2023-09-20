<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">

        <div class="title">REGISTER ADMIN</div>

        <div class="content">




            <?php
include 'connect.php';
if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $p_number = $_POST['p_number'];
    $address = $_POST['address'];
    $Ltype = $_POST['Ltype'];
    $Lname = $_POST['Lname'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'uimg/' . $image;

    $sql = "insert into registrationAdmin(fullname, username, email, p_number, address, Ltype, Lname, password, gender, image)
    values( '$fullname', '$username', '$email', '$p_number', '$address', '$Ltype', '$Lname', '$password', '$gender', '$image')";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tmpname, $uploc);
        // header("location:log.php");
    } else {
        echo "Data not insert.";
    }

}

//     // Database connection
//     // $conn = mysqli_connect('localhost', 'root', '', 'virtual_library');
//     include 'connect.php';
//     if ($conn->connect_error) {
//         // echo "$conn->connect_error";
//         die("Connection Failed : " . $conn->connect_error);
//     } else {
//         if (isset($fullname) || isset($username) || isset($email) || isset($p_number) || isset($address) || isset($password) || isset($gender) || isset($image)) {

//             $stmt = $conn->prepare("insert into registration(fullname, username, email, p_number, address, password, gender, image) values(?, ?, ?, ?, ?, ?, ?, ?)");
//             move_uploaded_file($tmpname, $uploc);
//             $stmt->bind_param("sssssiss", $fullname, $username, $email, $p_number, $address, $password, $gender, $image);

//             $execval = $stmt->execute();
//             echo $execval;
//             header("location:log.php");
//             $stmt->close();
//             $conn->close();
//         }
//     }
// }
?>






<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" >


                <div class="wrapper">

                    <div class="input-data">
                        <input type="text" required name="fullname">
                        <div class="underline"></div>
                        <label>Full Name</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="username">
                        <div class="underline"></div>
                        <label>Username</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="email">
                        <div class="underline"></div>
                        <label>Email</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="p_number">
                        <div class="underline"></div>
                        <label>Phone Number</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="address">
                        <div class="underline"></div>
                        <label>Address</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="Ltype">
                        <div class="underline"></div>
                        <label>Library Type</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="Lname">
                        <div class="underline"></div>
                        <label>Library Name</label>
                    </div>

                    <div class="input-data">
                        <input type="text" required name="password">
                        <div class="underline"></div>
                        <label>Password</label>
                    </div>

                    <div class="input">
                        <input type="file" required name="image">
                        <div class="upload"></div>
                        <label>Upload Image</label>
                    </div>

                   


                </div>

                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="m">
                    <input type="radio" name="gender" id="dot-2" value="f">
                    <input type="radio" name="gender" id="dot-3" value="o">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>

                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>

                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Register" name="submit">
                </div>

                <div class="signup_link">
        Have an account? <a href="logAdmin.php">Admin Login</a>
      </div>

            </form>
        </div>
    </div>

</body>

</html>