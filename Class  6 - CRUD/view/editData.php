<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Layout Design</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        
        <div class="header">
            <div class="header-logo">
                <img src="../img/Koala.jpg" alt="Koala" height="100%" width="100%"/>
            
            </div>
            <div class="header-banner">
                 <img src="../img/Desert.jpg" alt="Desert" height="100%" width="100%"/>
            </div>
        </div>
        
        <div class="navigation">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Add User</a></li>
                <li><a href="userData.php">List User</a></li>
            </ul>
        </div>
        <div class="left-sidebar">
            
        </div>         
        <div class="content-section">
                <h3>Registration Form</h3>
			    <hr>
				<table style="" class="regForm">
				    <form action="../model/update.php" name="registration" method="post">
				        <?php 
                        include("../model/config.php");
                        $id=$_GET['id'];
                        $sql = "select * from stdinfo where id=$id";
                        $res = mysqli_query($myconn, $sql);
                        $row=mysqli_fetch_assoc($res);
                        ?>
                        <input type="text" name="eid" value="<?php echo $id ?>" hidden>
                        <tr>
				            <td>Id: </td>
				            <td><input type="text" name="id" value="<?php echo $row['id']?>" required></td>
				        </tr>
                        <tr>
				            <td>Name: </td>
				            <td><input type="text" name="name" value="<?php echo $row['name']?>" required></td>
				        </tr>
				        <tr>
				            <td>Email: </td>
				            <td><input type="email" name="email" value="<?php echo $row['email']?>" required></td>
				        </tr>
				        <tr>
				            
				            <td><input type="submit" value="Submit"></td>
				        </tr>
				    </form>
				</table>
				<br><br>
        </div>
        <div class="right-sidebar"></div>
        <div class="footer">
            <div class="footer-left"><p>Nibir Setu</p></div>
            <div class="footer-right">
                <div class="icon fb"><a href="#"><img src="img/footer.png" alt=""></a></div>          
                <div class="icon google"><a href="#"><img src="img/footer.png" alt=""></a></div>          
                <div class="icon twiter"><a href="#"><img src="img/footer.png" alt=""></a></div>          
            </div>
        </div>
        
    </div>
</body>
</html>