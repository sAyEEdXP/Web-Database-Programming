<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    
    <link rel="stylesheet" href="../res/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="../res/jquery.min.js"></script>

    <script src="../res/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
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
              <li style="font-weight: bold"><a href="#">Add Product</a></li>
              <li><a href="productlist.php">Product List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        
        <!--        Navigation End here-->
        
         <div class="row">
             <div class="col-md-3 col-sm-3"></div>
             <div class="col-md-6 col-sm-6">
                 
                 <h2>Add the product details:</h2> <hr>
                <form action="../model/addproduct.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="productName">Product Name:</label>
                    <input type="text" class="form-control" name="productName" max="20" required>
                  </div>
                  <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="productPrice"  required>
                  </div>
                  <div class="form-group">
                    <label for="details">Details:</label>
                      <textarea class="form-control" name="productDetails" maxlength="250"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image">Upload product image:</label>
                      <input type="file" class="form-control" name="productImage"  required>
                  </div>

                  
                  <input type="submit" class="btn btn-default" value="Add">
                </form>
             </div>
             
             <div class="col-md-3 col-sm-3"></div>
         </div>
        
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div>
</body>
</html>