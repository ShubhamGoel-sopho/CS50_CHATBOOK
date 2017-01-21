<?php
    
    //require conf files
    require("../includes/config.php");
  
    if(isset($_POST["name_of_friend"]) && !empty($_POST["name_of_friend"]))
    {
        $row = CS50::query("SELECT * FROM `users` WHERE username = ?",$_POST["name_of_friend"]);
        if(count($row) === 1){
            $image_path = CS50::query("SELECT * FROM images WHERE user_id = ?",$row[0]["id"]); 
            echo $image_path[0]["image_name"];
        }
    } 
?>