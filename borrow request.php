<!DOCTYPE html>
<html>
    <head>
        <title>Add To Cart</title>
        
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="borrow request.css">
    </head>
    <body>
     

        <?php
            session_start();
            // $username=$_SESSION['username'];
                include 'connect.php';
                if(isset($_GET['ke']))
                {
                $ke=$_GET['ke'];
                //echo  $key;
                //$sql = 'select * from books where book_id LIKE "%'.$ke.'%"';
                $sql = "select * from books where book_id = $ke";
                $result = mysqli_query($conn, $sql); //boolin result

                //echo  $result;
                if ($result) {
                    
                     $row = mysqli_fetch_array($result);
                     $book_id = $row['book_id'];
                     $book_name = $row['book_name'];
                     $image = $row['image'];
                     $fees = $row['fees'];
                     $Lname = $row['Lname'];
                     $Laddress = $row['Laddress'];
                     $Glocation= $row['Glocation'];

                

                echo 
                '
                <div class="book">
                <img src="img/'.$image.'" alt="book" class="book_image">';

                if(isset($_SESSION['username']))
                {
                echo '<a href="customerType.php?book_id='.$book_id.'">
                <button class="book_button book_buy">BORROW</button>
                </a>';
                }

                else
                {
                    echo '<a href="log.php">
                <button class="book_button book_buy">BORROW</button>
                </a>';
                }
                echo '
                </div>
                
                <div class="book">
                <h1 class="book_title">'.$book_name.'</h1>
                <h3 class="book_price"> <small>BDT</small> <span>'.$fees.'</span> </h3>
                <p class="book_price"> <small><h3>Libary Name:</h3></small> <span>'.$Lname.'</span> </p>
                <p class="book_price"> <small><h3>Address:</h3></small> <span>'.$Laddress.'</span> </p>
                <p class="book_price"> <span> <a href="'.$Glocation.'">Google location</a></span> </p>
                </div>';
                    
                } else {
                    die(mysqli_error($conn));
                }
            }
            ?>





           
            <!-- <div class="book_rating">
                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                <p><i class="fa fa-star" aria-hidden="true"></i></p>
            </div> -->
            

            
            

        
    </body>
</html>