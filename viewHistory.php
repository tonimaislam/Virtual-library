<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Virtual Library</title>
</head>
<body>

<div class="container">
    <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Book</th>
      <th scope="col">Library</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Return</th>
    </tr>
  </thead>
  <tbody>


  <?php
//   header("location:connect.php");
include 'connect.php';
session_start();
$username=$_SESSION['username'];

$sql="SELECT * FROM borrow where username = '$username'";
$resul=mysqli_query($conn,$sql);
if($resul)
{
    while($row=mysqli_fetch_array($resul))
    {
    $borrow_id=$row['borrow_id'];
    $username=$row['username'];
    $book_name=$row['book_name'];
    $Ltype=$row['Ltype'];
    $Lname=$row['Lname'];
    $status=$row['status'];
    $returnN=$row['returnN'];


    if($status == 'accepted' && $returnN=='')
    {
    echo '<tr>
       <td>'.$book_name.'</td>
       <td>'.$Ltype.'</td>
       <td>'.$Lname.'</td>
       <td>'.$status.'</td>
       <td>
       <button class="btn btn-primary"><a href="returnRequestUser.php?key='.$Ltype.' & key2='.$Lname.' & key3='.$borrow_id.'" class="text-light">Request</a></button>
       </td>
     </tr>';
    }

    else if($returnN=='pending')
    {
      echo '<tr>
       <td>'.$book_name.'</td>
       <td>'.$Ltype.'</td>
       <td>'.$Lname.'</td>
       <td>'.$status.'</td>
       <td>'.$returnN.'</td>
     </tr>';
    }

    else
    {
      echo '<tr>
       <td>'.$book_name.'</td>
       <td>'.$Ltype.'</td>
       <td>'.$Lname.'</td>
       <td>'.$status.'</td>
       <td>'.$returnN.'</td>
     </tr>';
    }

    }

}

else {
    die(mysqli_error($conn));
}

  ?>




    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>

</div>
    
</body>
</html>