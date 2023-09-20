<?php

include 'connect.php';


if(isset($_GET['key']) && isset($_GET['key2']) && isset($_GET['key3']))
{
    $Ltype=$_GET['key'];
    $Lname=$_GET['key2'];
    $borrow_id=$_GET['key3'];

    $sql="update borrow set returnN='pending' where borrow_id='$borrow_id'";
    $result=mysqli_query($conn,$sql);
    if($result)
        {
            header("location:viewHistory.php?key=$Ltype & key2=$Lname");
        }
}

?>