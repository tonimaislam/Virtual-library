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
      <th scope="col">User</th>
      <th scope="col">Book</th>
      <th scope="col">Library</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>


  <?php
//   header("location:connect.php");
include 'connect.php';
if(isset($_GET['key']) && isset($_GET['key2']))
{
    $Ltype=$_GET['key'];
    $Lname=$_GET['key2'];
}

$sql="SELECT * FROM borrow where Ltype = '$Ltype' And Lname = '$Lname' And status='pending'";
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


    echo '<tr>
       <td>'.$username.'</td>
       <td>'.$book_name.'</td>
       <td>'.$Ltype.'</td>
       <td>'.$Lname.'</td>
       <td>'.$status.'</td>
       <td>
       <button class="btn btn-primary"><a href="updateRequest.php?key='.$Ltype.' & key2='.$Lname.' & key3='.$borrow_id.'" class="text-light">Accept</a></button>
       </td>
     </tr>';
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