<?php
include 'connect.php';

if(isset($_GET['key']) && isset($_GET['key2']))
{
  $Ltype=$_GET['key'];
  $Lname=$_GET['key2'];
}



$updateke=$_GET['updateke'];
$sql= "select * from books WHERE book_id=$updateke";
$_result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($_result);

$book_name=$row['book_name'];
$image=$row['image'];
$author=$row['author'];
$keyword=$row['keyword'];
$fees=$row['fees'];
// $Ltype=$row['Ltype'];
// $Lname=$row['Lname'];
$Laddress=$row['Laddress'];
$Glocation=$row['Glocation'];




if(isset($_POST['submit']))
{
  $book_name=$_POST['book_name'];
  $image=$_POST['image'];
  $author=$_POST['author'];
  $keyword=$_POST['keyword'];
  $fees=$_POST['fees'];
  // $Ltype=$_POST['Ltype'];
  // $Lname=$_POST['Lname'];
  $Laddress=$_POST['Laddress'];
  $Glocation=$_POST['Glocation'];
  // echo "success 0";
  $sql= "update books set book_name='$book_name', image='$image', author='$author', keyword='$keyword', fees=$fees, Ltype='$Ltype', Lname='$Lname', Laddress='$Laddress', Glocation='$Glocation' where book_id=$updateke";
  //$sql= "update books set book_id=$updateke, image='$image', author='$author', keyword='$keyword', fees=$fees, Laddress='$Laddress', Glocation='$Glocation' where book_id=$updateke";
  // echo "success 1";
  $_result=mysqli_query($conn,$sql);
if($_result)
{
  // echo "success 2";
  // include 'display.php';
// header("location:profileAdmin.php");
header("location:displayBooks.php?key=$Ltype & key2=$Lname");
}

else
{
  die(mysqli_errno($conn));
}
}
?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  <title>Virtual Library</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">

      <div class="form-group">
        <label>Book Name</label>
        <input type="text" class="form-control" placeholder="Enter Book Name" name="book_name" value="<?php echo $book_name ?>">
      </div>

      <div class="form-group">
        <label>Image</label>
        <input type="text" class="form-control" placeholder="Add Image" name="image" value="<?php echo $image ?>">
      </div>

      <div class="form-group">
        <label>Author</label>
        <input type="text" class="form-control" placeholder="Enter Author" name="author" value="<?php echo $author ?>">
      </div>

      <div class="form-group">
        <label>Keyword</label>
        <input type="text" class="form-control" placeholder="Enter Keyword" name="keyword" value="<?php echo $keyword ?>">
      </div>

      <div class="form-group">
        <label>Fees</label>
        <input type="text" class="form-control" placeholder="Enter fees" name="fees" value="<?php echo $fees ?>">
      </div>

      <!-- <div class="form-group">
        <label>Library Type</label>
        <input type="text" class="form-control" placeholder="Enter Library Type" name="Ltype" value="<?php echo $Ltype ?>">
      </div>

      <div class="form-group">
        <label>Library Name</label>
        <input type="text" class="form-control" placeholder="Enter Library Name" name="Lname" value="<?php echo $Lname ?>">
      </div> -->

      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter Address" name="Laddress" value="<?php echo $Laddress ?>">
      </div>
      
      <div class="form-group">
        <label>Google Link</label>
        <input type="text" class="form-control" placeholder="Enter Google Link" name="Glocation" value="<?php echo $Glocation ?>">
      </div>
     
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>