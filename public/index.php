<?php
    
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]))
    {
        render("welcome.php",["title" => "welcome","script" => 3]);
    }
    

?>