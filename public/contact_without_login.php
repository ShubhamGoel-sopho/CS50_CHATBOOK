<?php

    
    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }

    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");
    
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["comments"])){
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comments"]))
        {
           $val = CS50::query("INSERT INTO contact_other (name,email,comments) VALUES (?,?,?)",$_POST["name"],$_POST["email"],$_POST["comments"]);
        
          if($val == true)
          {
              redirect("login.php");
          }
        }
    }    
?>