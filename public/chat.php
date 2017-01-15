<?php
    
    require("../includes/config.php");
    
    
    if(isset($_POST["Message"]) && isset($_POST["Friend"]) && !empty($_POST["Message"]) && !empty($_POST["Friend"])){
        $message =  htmlspecialchars($_POST["Message"]);
        $receiver = htmlspecialchars($_POST["Friend"]);
        
        //send message to the database 
        send_message($message,$receiver);
    }
    else
    {
        echo "Data Is Not Appropriate -> Not Sent!!!";
    }
    
?>