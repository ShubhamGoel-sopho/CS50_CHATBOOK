<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
        render("friend_page.php",["title" => "Friends","style" => 2,"script" => 5]);
    }
?>