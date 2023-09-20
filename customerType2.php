<?php
session_start();
$username = $_SESSION['username'];
include 'connect.php';
$book_id = $_GET['book_id'];
//echo "2=$book_id";


if (isset($username)) {
    $sql = "SELECT COUNT(*) FROM borrow WHERE (username = '$username' AND returnN = '' )OR (username = '$username' AND returnN = 'pending')";
    $result = mysqli_query($conn, $sql); //boolin result
    if ($result) {
        $row = mysqli_fetch_array($result);
        $countT = $row['COUNT(*)'];
        //$book_id = $row['book_id'];
        //echo "$countT";

        //echo " $countT";
        if ($countT == 0) {
            header("location:payment.php?book_id=$book_id");}

            else{
                echo "<h2>Sorry, you are not a Royal customer. Please, return your current book then borrow another book.</h2>";
            }
        }
    }else {
    echo "Problem";
}

?>