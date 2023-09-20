<?php

include 'connect.php';


if(isset($_GET['key']) && isset($_GET['key2']) && isset($_GET['key3']))
{
    $Ltype=$_GET['key'];
    $Lname=$_GET['key2'];
    $borrow_id=$_GET['key3'];

    $sql="update borrow set status='accepted' where borrow_id='$borrow_id'";
    $result=mysqli_query($conn,$sql);
    if($result)
        {
            header("location:displayRequest.php?key=$Ltype & key2=$Lname");
        }
}







// if(isset($_GET['borrow_id']))
// 	{
// 		$data=$_GET['borrow_id'];
//         $tmp=explode("/",$data);
//         $borrow_id=$tmp[0];
//         $Lname=$tmp[1];

//         $sql="update borrow set status='accepted' where borrow_id='$borrow_id'";
// 		$result=mysqli_query($conn,$sql);
//         if($result)
//         {
//             header("location:displayRequest.php?key=$borrow_id & key2=$Ltype & key3=$Lname");
//         }
//     }
        ?>