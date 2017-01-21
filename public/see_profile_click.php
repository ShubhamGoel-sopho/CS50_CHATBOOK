<?php
    
    //require conf files
    require("../includes/config.php");
  
    if(isset($_POST["name_of_friend"]) && !empty($_POST["name_of_friend"]))
    {
        $row = CS50::query("SELECT * FROM `users` WHERE username = ?",$_POST["name_of_friend"]);
        if(count($row) === 1){
            $row_for_posts = CS50::query("SELECT * FROM posts WHERE user_id = ? ORDER BY date_time",$row[0]["id"]);
           // $image_path = CS50::query("SELECT * FROM images WHERE user_id = ?",$row[0]["id"]); 
            
            // output articles as JSON (pretty-printed for debugging convenience)
            header("Content-type: application/json");
            print(json_encode($row_for_posts, JSON_PRETTY_PRINT));
            
        }
    } 
?>