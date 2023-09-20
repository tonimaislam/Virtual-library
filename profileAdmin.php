<?php
session_start();//global veriable
include 'connect.php';
$username=$_SESSION['usernameAdmin'];
$sql="select * from  registrationadmin where username='$username'";
$result=mysqli_query($conn,$sql);

if($result)
{
    while($row=mysqli_fetch_array($result))
    {
        $image=$row['image'];
        $fullname=$row['fullname'];
        $email=$row['email'];
        $phone=$row['p_number'];
        $address=$row['address'];
        $Ltype=$row['Ltype'];
        $Lname=$row['Lname'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Library</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>
</head>

<body>

    <div class="container">
        <div class="main">

            <div class="topbar">
                <a href="logout.php">Log Out</a>
                <a href="displayBooks.php?key=<?php echo $Ltype ?> & key2=<?php echo $Lname ?>">Work</a>
                <a href="displayReturn.php?key=<?php echo $Ltype ?> & key2=<?php echo $Lname ?>">Return</a>
                <a href="displayRequest.php?key=<?php echo $Ltype ?> & key2=<?php echo $Lname ?>">Request</a>
                <a href="profileAdmin.php">Home</a>
            </div>






            <div class="row">



                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar w1">
                        <div class="card-body w1">

                            <img src="uimg/<?php echo $image ?>" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h3><?php
                                    echo $fullname;
                                     ?></h3>
                                <!-- <a href="home.html">Home</a> -->
                                <!-- <a href="#">Work</a> -->
                                <!-- <a href="#">Support</a> -->
                                <!-- <a href="#">Setting</a> -->
                                <!-- <a href="#">Signout</a> -->
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-md-8 mt-1">


                    <div class="card mb-3 content w2">
                        <h1 class="m-3 pt-3">About Admin</h1>


                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Full Name</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                    <?php
                                    echo $fullname;
                                     ?>
                                </div>
                            </div>


                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Email</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                <?php
                                    echo $email;
                                     ?>
                                </div>
                            </div>


                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Phone</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                <?php
                                    echo $phone;
                                     ?>
                                </div>
                            </div>


                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Address</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                <?php
                                    echo $address;
                                     ?>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Library Type</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                <?php
                                     echo $Ltype;
                                     ?>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Library Name</h5>
                                </div>

                                <div class="col-md-9 text-secondary">
                                <?php
                                     echo $Lname;
                                     ?>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>



        </div>
</body>

</html>