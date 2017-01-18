<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("faq_view.php",["title" => "faq","script" => 6]);
    }
?>