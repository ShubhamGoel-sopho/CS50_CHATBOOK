<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
        render("contact_form.php",["title" => "Contact","script" => 6,"style" => 3]);
    }
    elseif(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["mob"]) && isset($_POST["inputDescription"]) && !empty($_POST["mob"]) && !empty($_POST["inputDescription"]))
        {
            $val = CS50::query("INSERT INTO contact (user_id,query,contact) VALUES(?,?,?)",$_SESSION["id"],$_POST["inputDescription"],$_POST["mob"]);
        
            if($val == true)
            {
                render("greet.php",["title" => "DONE","message" => "Successfully Submitted , We'll Shortly Contact You"]);
            }
        }
    }
    
?>    