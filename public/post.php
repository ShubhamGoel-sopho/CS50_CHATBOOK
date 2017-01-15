<?php

    require("../includes/config.php");
    
    if(isset($_POST["Post"]) && !empty($_POST["Post"]))
    {
       $post = htmlspecialchars($_POST["Post"]);
       $val = CS50::query("INSERT INTO posts (user_id,post,date_time) VALUES(?,?,NOW())",$_SESSION["id"],$post);
       if($val == true){
           echo "Posted In Your Profile";
       }    
       else
       {
           echo "Some Problem Is There Try After Sometime ";
       }
        
    }
    else
    {
        echo "Please Don't Try To Fool Us!!!";
    }
?>