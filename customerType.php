<?php
session_start();
$username = $_SESSION['username'];
include 'connect.php';
$book_id = $_GET['book_id'];
//echo "$book_id";

if (isset($username)) {
    $sql = "SELECT COUNT(*) FROM borrow WHERE username = '$username' AND returnN = 'accepted'";
    $result = mysqli_query($conn, $sql); //boolin result
    if ($result) {
        $row = mysqli_fetch_array($result);
        $countT = $row['COUNT(*)'];
        //$book_id = $row['book_id'];
        //echo "c1=$countT";

        if ($countT >= 5) {
            header("location:payment.php?book_id=$book_id");}

        else {
            header("location:customerType2.php?book_id=$book_id");
        }
    }
 else {
    echo "Problem";
}}