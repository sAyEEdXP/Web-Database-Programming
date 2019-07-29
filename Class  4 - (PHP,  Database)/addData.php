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
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
        <div class="left-sidebar">
            
        </div>         
        <div class="content-section">
                <?php
                    include('database/tablecreate.php');
                    $name=$email=$gender=$birthday=$nationality="";
                    $name = $_POST['name'];
                    $email = $_POST['email'];    
                    $gender = $_POST['gender'];
                    $birthday = $_POST['birthday'];
                    $nationality = $_POST['nationality'];
                //    echo "".$name." ".$email." ".$gender." ".$birthday." ".$nationality;
                    $adddata = "INSERT INTO patient(name, email, gender, birthday, nationality) 
                        VALUES('$name', '$email', '$gender', '$birthday','$nationality')";
                    $res = mysqli_query($myconn, $adddata);
                    if($res==true){
                        echo "<h3>Data added successfully</h3>";
                    } else {
                        echo "<h3>Data is not added</h3>";
                    }
                ?>
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