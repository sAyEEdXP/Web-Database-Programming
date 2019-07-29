<?php
    include("../model/config.php");
    $userList = "SELECT * FROM products";
    $res = mysqli_query($myconn, $userList);
    if(mysqli_num_rows($res) > 0){
        echo '<div class="row">';
        while($row = mysqli_fetch_array($res)){
            $pid = $row["p_id"];
            $path = $row["filepath"];
            $price = $row["price"];
            $details = $row["details"];
             echo " <div class='col-md-3'>
                        <div class='thumbnail'>
                            <a href='productdetails.php?id=$pid'>
                                <img src='../$path' alt='caption' style='width:200px; width=200px;'>
                                <div class='caption'><p>Price : $price</p></div>
                            </a>
                        </div>
                    </div>";
        }
        echo "</div>";
        
        
        
        
    }  
    
    // data-toggle='modal' data-target='#myModal'              
                        

?>