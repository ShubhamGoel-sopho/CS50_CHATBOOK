<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register","script" => 2,"style" => 1]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["name"]) || empty($_POST["confirm_password"]) || empty($_POST["email"]))
        {
            apologize("you must provide the username or password");
        }
        else
        {
            if($_POST["password"] == $_POST["confirm_password"])
            {
                $ans = CS50::query("INSERT IGNORE INTO users (email,name,username,password) VALUES(?, ?, ?, ?)",$_POST["email"],$_POST["name"],$_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
                if($ans != 0)
                {
                    $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                    $id = $rows[0]["id"];
                    $_SESSION["id"] = $id;
                    redirect("index.php");
                }
                else
                {
                    apologize("User with this username already exists please try diffrent one!");
                }
            }
            else
            {
                apologize("passwords are not matching");
            }
        }
    }

?>
