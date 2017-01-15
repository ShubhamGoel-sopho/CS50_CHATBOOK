<?php
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
        render("edit_profile_page.php",["title" => "Edit","style" => 3,"script" => 6]);
    }
    elseif(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
        
        if(isset($_POST["name"]) && !empty($_POST["name"]))
        {
            $name = $_POST["name"];
            $val = CS50::query("UPDATE users SET name = ? WHERE id = ?",$name,$_SESSION["id"]);
        
            if($val == true)
            {
                redirect("profile.php");
            }
        }
        elseif(isset($_POST["email"]) && !empty($_POST["email"]))
        {
            $email = $_POST["email"];
           
            $val = CS50::query("UPDATE users SET email = ? WHERE id = ?",$email,$_SESSION["id"]);
        
            if($val == true)
            {
                redirect("profile.php");
            }
        }
        elseif(isset($_POST["old_password"]) && !empty($_POST["old_password"]) && isset($_POST["new_password"]) && !empty($_POST["new_password"]))
        {
            $old_password = $_POST["old_password"];
            $new_password = $_POST["new_password"];
            
            if(password_verify($old_password, $row[0]["password"]))
            {
                $val = CS50::query("UPDATE users SET password = ? WHERE id = ?",password_hash($new_password,PASSWORD_DEFAULT),$_SESSION["id"]);
        
                if($val == true)
                {
                    redirect("logout.php");
                } 
            }
        }
        else
        {
            render("apology.php",["title" => "Sorry","message" => "Sorry Fill All the Fields!!!"]);
        }
    }
        
?>