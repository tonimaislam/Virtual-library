<?php
include 'connect.php';

if(isset($_GET['key']) && isset($_GET['key2']))
    {
      $Ltype=$_GET['key'];
      $Lname=$_GET['key2'];
    }
    
if(isset($_GET['deleteke']))
{
    //echo "success 0";
    // $Lname=$_GET['ke'];
    // echo $Lname;
    $deleteke=$_GET['deleteke'];
    $sql="delete from books where book_id=$deleteke";
    $_result=mysqli_query($conn,$sql);

    if($_result)
    {
        //echo "success";
        //header("location:profileAdmin.php");
        header("location:displayBooks.php?key=$Ltype & key2=$Lname");
    }

    else
    {
        die(mysqli_error($conn));
    }
}

?>