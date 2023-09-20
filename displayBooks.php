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
    <button class="btn btn-primary my-5">
      <?php 
    if(isset($_GET['key']) && isset($_GET['key2']))
$Ltype=$_GET['key'];
$Lname=$_GET['key2'];
?>
        <a href="addBook.php?key=<?php echo $Ltype ?> & key2=<?php echo $Lname ?>" class="text-light">
        Add Book
        </a>
    </button>

    <button class="btn btn-primary my-5">
        <a href="profileAdmin.php" class="text-light">
        Back
        </a>
    </button>

    <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Books</th>
      <th scope="col">Image</th>
      <th scope="col">Author</th>
      <th scope="col">Keyword</th>
      <th scope="col">Fees</th>
      <th scope="col">Type</th>
      <th scope="col">Library</th>
      <th scope="col">Address</th>
      <th scope="col">Location</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


  <?php
//   header("location:connect.php");
include 'connect.php';
if(isset($_GET['key']) && isset($_GET['key2']))
$Ltype=$_GET['key'];
$Lname=$_GET['key2'];
// echo "$Ltype \n $Lname";
$sql="SELECT * FROM books where Ltype = '$Ltype' AND Lname = '$Lname'";
$resul=mysqli_query($conn,$sql);
if($resul)
{
    while($row=mysqli_fetch_array($resul))
    {
    $book_id=$row['book_id'];
    $book_name=$row['book_name'];
    $image=$row['image'];
    $author=$row['author'];
    $keyword=$row['keyword'];
    $fees=$row['fees'];
    $Ltype=$row['Ltype'];
    $Lname=$row['Lname'];
    $Laddress=$row['Laddress'];
    $Glocation=$row['Glocation'];


    echo '<tr>
       <td>'.$book_name.'</td>
       <td>'.$image.'</td>
       <td>'.$author.'</td>
       <td>'.$keyword.'</td>
       <td>'.$fees.'</td>
       <td>'.$Ltype.'</td>
       <td>'.$Lname.'</td>
       <td>'.$Laddress.'</td>
       <td>'.$Glocation.'</td>
       <td>
       <button class="btn btn-primary"><a href="updateBook.php?updateke='.$book_id.' & key='.$Ltype.' & key2='.$Lname.'" class="text-light">Update</a></button>
       <button class="btn btn-danger"><a href="deleteBook.php?deleteke='.$book_id.' & key='.$Ltype.' & key2='.$Lname.'" class="text-light">Delete</a></button>
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