<?php include("view/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link rel="stylesheet" href="res/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="res/jquery.min.js"></script>

    <script src="res/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="view/productform.php">Add Product</a></li>
              <li><a href="view/productlist.php">Product List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="view/logout.php"><span class="glyphicon glyphicon-user"></span>
             <?php echo $_SESSION['email']; ?>
             </a></li>
              
            
            <li><a href="view/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
        <h1>Welcome to KenaBecha.com</h1>
         
        
        <div class="footer">
            
        </div>
        
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div> 
    
</body>
</html>