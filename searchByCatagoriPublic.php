<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Library</title>
    <link rel="stylesheet" href="personal.css">
</head>

<body>

    <div class="main">
        <div class="navbar">

            <div class="manue">
                <ul>
                    <!-- <form action="" method="get"> -->
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=<?php echo 'FICTION' ?>&key2=<?php echo 'Public' ?>">FICTION</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=<?php echo 'EDUCATIONAL' ?>&key2=<?php echo 'Public' ?>">EDUCATIONAL</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=<?php echo 'BIOGRAPHIES' ?>&key2=<?php echo 'Public' ?>">BIOGRAPHIES</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=<?php echo 'ISLAMIC' ?>&key2=<?php echo 'Public' ?>">ISLAMIC</a></li>
                        <!-- <li><a href="searchByCatagoriPublic.php?key=FICTION">FICTION</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=EDUCATIONAL">EDUCATIONAL</a></li>
                        <li><a href="searchByCatagoriPublic.php?key=BIOGRAPHIES">BIOGRAPHIES</a>
                        <li><a href="searchByCatagoriPublic.php?key=ISLAMIC">ISLAMIC</a> -->
                    <!-- </form> -->
                </ul>
            </div>

            <div class="search">
                <form action="searchPublic.php" method="post">
                    <input type="text" placeholder=" search books" name="search">
                    <button type="submit" name="search_btn">Search</button>
                </form>
            </div>

        </div>


        <div class="container">

             <?php
                include 'connect.php';
                if(isset($_GET['key']))
                {
                $key=$_GET['key'];
                // $key2=$_GET['key2'];
                // echo  "$key \n $key2";
                
                $sql = 'select * from books where Ltype = "Public" AND keyword LIKE "%'.$key.'%" OR author LIKE "%'.$key.'%" ';
                // $sql = 'select * from books where Ltype = "Public"';
                $result = mysqli_query($conn, $sql); //boolin result
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $book_id = $row['book_id'];
                $book_name = $row['book_name'];
                $image = $row['image'];
                $author = $row['author'];

                // echo ' <div class="gallery">
                // <img style="height: 200px !important; " src="img/' . $image . '">
                // <div class="desc">' . $book_name . '</div>
                // </div>';



                echo ' <div class="gallery">
                <a href="borrow request.php?ke='.$book_id.'"> <img style="height: 200px !important; " src="img/' . $image . '"> </a>
                <div class="desc">' . $book_name . '</div>
                </div>';
                }
                } else {
                    die(mysqli_error($conn));
                }
            }
            ?>
        </div>
    </div>

</body>

</html>