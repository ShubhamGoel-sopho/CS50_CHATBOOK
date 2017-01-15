<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
        render("profile_page.php",["title" => "Profile","style" => 2,"script" => 5]);
    }
?>