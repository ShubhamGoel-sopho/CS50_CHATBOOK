<?php
    
    
    require("../includes/config.php");
     if(isset($_SESSION["id"])){
        if($_GET['chk']){
            //query the database for the dynamic values
            $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
            $rows = CS50::query("SELECT * FROM friends WHERE (friend_1 = ? OR friend_2 = ?)",$row[0]["username"],$row[0]["username"]);
            //iterate for every friend in the database for the user
            $modified_friend = array();
            if(!empty($rows)){
                foreach($rows as $row1)
                {
                   if($row1["friend_1"] == $row[0]["username"]){
                    
                        $r  = CS50::query("SELECT * FROM users WHERE username = ?",$row1["friend_2"]);
                        $modified_friend[] = array("username" => $row1['friend_2'],"name_of_person" => $r[0]["name"]);
                    }
                   else if($row1["friend_2"] == $row[0]["username"]){
                        $r  = CS50::query("SELECT * FROM users WHERE username = ?",$row1["friend_1"]);
                        $modified_friend[] = array("username" => $row1['friend_1'],"name_of_person" => $r[0]["name"]);
                    }
                }
            }
            else
            {
                $modified_friend[] = array("username" => "NULL","name" => "You Have No Friends"); 
            }
             // output articles as JSON (pretty-printed for debugging convenience)
            header("Content-type: application/json");
            print(json_encode($modified_friend, JSON_PRETTY_PRINT));
        }
    }    
?>    