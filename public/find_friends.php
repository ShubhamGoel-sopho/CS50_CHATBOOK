<?php
    
    require("../includes/config.php");
    
    //this page would show the name of the friends what have been searched by the users
    //if the user has reached the page by click some link or through by button
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(isset($_POST["fb_friends"]) && !empty($_POST["fb_friends"]))
        {
            render("friends_table.php",["friends" => $_POST["fb_friends"],"script" => 4]);
        }
    }
    else if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["fb_friends"]) && !empty($_POST["fb_friends"]))
        {
            render("friends_table.php",["friends" => $_POST["fb_friends"],"script" => 4]);
        }
        else
        {
            apologize("somehing is missing");
        }
    }
?>