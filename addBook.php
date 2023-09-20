<?php
include 'connect.php';





if (isset($_POST['submit'])) {
    $book_name = $_POST['book_name'];
    

    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'uimg/' . $image;
    


    $author = $_POST['author'];
    $keyword = $_POST['keyword'];
    $fees = $_POST['fees'];
    // $Ltype = $_POST['Ltype'];
    // $Lname = $_POST['Lname'];
    if(isset($_GET['key']) && isset($_GET['key2']))
    {
      $Ltype=$_GET['key'];
      $Lname=$_GET['key2'];
    }
    $Laddress = $_POST['Laddress'];
    $Glocation = $_POST['Glocation'];
    // echo "success 0";
    $sql = "insert into books(book_name, image, author, keyword, fees, Ltype, Lname, Laddress, Glocation)
  VALUES('$book_name','$image','$author','$keyword', '$fees', '$Ltype','$Lname','$Laddress','$Glocation')";
    // echo "success 1";
    $_result = mysqli_query($conn, $sql);
    if ($_result) {
        // echo "success 2";
        // include 'display.php';
        // echo '<a href="displayBooks.php?ke='.$Lname.'"> </a>';
        move_uploaded_file($tmpname, $uploc);
        header("location:displayBooks.php?key=$Ltype & key2=$Lname");
    } else {
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
    <form method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label>Book Name</label>
        <input type="text" class="form-control" placeholder="Enter Book Name" name="book_name">
      </div>

      <div class="input">
        <input type="file" required name="image">
        <div class="upload"></div>
        <label>Upload Book Image</label>
      </div>

      <div class="form-group">
        <label>Author</label>
        <input type="text" class="form-control" placeholder="Enter Author" name="author">
      </div>

      <div class="form-group">
        <label>Keyword</label>
        <input type="text" class="form-control" placeholder="Enter Keyword" name="keyword">
      </div>

      <div class="form-group">
        <label>Fees</label>
        <input type="text" class="form-control" placeholder="Enter fees" name="fees">
      </div>

      <!-- <div class="form-group">
        <label>Library Type</label>
        <input type="text" class="form-control" placeholder="Enter Library Type" name="Ltype">
      </div>

      <div class="form-group">
        <label>Library Name</label>
        <input type="text" class="form-control" placeholder="Enter Library Name" name="Lname">
      </div> -->

      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter Address" name="Laddress">
      </div>

      <div class="form-group">
        <label>Google Link</label>
        <input type="text" class="form-control" placeholder="Enter Google Link" name="Glocation">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>