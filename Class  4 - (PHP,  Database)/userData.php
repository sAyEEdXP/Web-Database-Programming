<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Layout Design</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        
        <div class="header">
            <div class="header-logo">
                <img src="img/Koala.jpg" alt="Koala" height="100%" width="100%"/>
            
            </div>
            <div class="header-banner">
                 <img src="img/Desert.jpg" alt="Desert" height="100%" width="100%"/>
            </div>
        </div>
        
        <div class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Add User</a></li>
            </ul>
        </div>
        <div class="left-sidebar">
            
        </div>         
        <div class="content-section">
                <h3>Registration Form</h3>
			    <hr>
				<table border="1" style="" class="regForm">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Nationality</th>
                    </tr>
				    <?php
                    include('database/config.php');
                    $userList = "SELECT * FROM patient";
                    $res = mysqli_query($myconn, $userList);
                    if(mysqli_num_rows($res) > 0){
                        while($row = mysqli_fetch_assoc($res)){
                            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['birthday']."</td><td>".$row['nationality']."</td><td></tr>";
                        }
                    }
                    ?>
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