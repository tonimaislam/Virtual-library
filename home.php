<?php
session_start();//global variable
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Library</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <div class="main">
        <div class="navbar">

            <div class="logo">
                <a href="#">
                    <img src="img/logo.jpg" alt="logo">
                </a>
            </div>

            <div class="manue">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about_us.php">ABOUT</a></li>
                    <li><a href="#">SERVICE</a>
                        <div class="sub-manue-1">
                            <ul>
                                <li><a href="public.php">PUBLIC LIBRARY</a></li>
                                <!-- <li><a href="university.html">UNIVERSITY LIBRARY</a></li> -->
                                <!-- <li><a href="book_shop.html">BOOK SHOP</a></li> -->
                                <li><a href="personal.php">PERSONAL LIBRARY</a></li>
                                <!-- <li><a href="entrepreneur.html">ENTREPRENEUR LIBRARY</a></li> -->
                            </ul>

                        </div>

                    </li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="entry">
                <ul>
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        $username=$_SESSION['username'];
                        echo '<li><a href="profile.php">Hi,'.$username.'</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="reg.php">REGISTRATION</a></li>
                        <li><a href="log.php">LOGIN</a></li>';
                    }
                    ?>
                </ul>
            </div>

        </div>

        <div class="container">

       

        </div>

    </div>
    </div>

</body>

</html>