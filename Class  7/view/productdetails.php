<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link rel="stylesheet" href="../res/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="../res/jquery.min.js"></script>

    <script src="../res/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="../index.php">KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="productform.php">Add Product</a></li>
              <li  style="font-weight: bold"><a href="#">Product List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">           
              
            
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
        <center><h1>Product Details:</h1><hr></center>
        
         
         <div class="product-thumb">
             
             <?php 
                include("../model/config.php"); 
                $id = $_GET["id"];
                $sq = "SELECT * FROM products where p_id=$id";
                $rs = mysqli_query($myconn, $sq);
                $row = mysqli_fetch_assoc($rs);

                $pid = $row["p_id"];
                $path = $row["filepath"];
                $price = $row["price"];
                $details = $row["details"];


                echo "<div class='bg-1'>
                                <center>
                                    <img class='img-responsive' src='../$path' alt='Lights' style='width:300px'>
                                    <div class='caption'>
                                        <h4>Price : $price</h4>
                                        <h4>Id : $pid</h4>
                                        <h4>Features:</h4>
                                        <h6>$details</h6> 
                                    </div>
                                </center>
                            </div>";

             
             ?>
             
         </div>
        
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div> 
    
</body>
</html>