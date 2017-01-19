<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("upload_your_image_form.php",["title" => "IMAGE UPLOAD","script" => 7,"style" => 4]);
    }
?>