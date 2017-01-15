<?php

    /**
     * helpers.php
     *
     * Computer Science 50
     * Project3
     *
     * Helper functions.
     */

    require_once("config.php");

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
    }

    /**
     * Facilitates debugging by dumping contents of argument(s)
     * to browser.
     */
    function dump()
    {
        $arguments = func_get_args();
        require("../views/dump.php");
        exit;
    }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }

    

    /**
     * Redirects user to location, which can be a URL or
     * a relative path on the local host.
     *
     * http://stackoverflow.com/a/25643550/5156190
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }

    /**
     * Renders view, passing in values.
     */
    function render($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("../views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            // render view (between header and footer)
            require("../views/header.php");
            require("../views/{$view}");
            require("../views/footer.php");
            exit;
        }

        // else err
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }
    
    
    function send_message($message,$receiver)
    {
        $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
        $val = CS50::query("INSERT INTO `messages` (user_id,sender_username,receiver_username,message,time_of_message) VALUES(?,?,?,?,NOW())",$_SESSION["id"],$row[0]["username"],$receiver,$message);
        if($val == true)
            echo "SENT";
        else
            echo "NOT SENT :(";
    }
    
    function receive_message()
    {
        $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
        $rows = CS50::query("SELECT * FROM messages WHERE (user_id = ? OR receiver_username = ?) ORDER BY time_of_message",$_SESSION["id"],$row[0]["username"]);
        
        // output articles as JSON (pretty-printed for debugging convenience)
        header("Content-type: application/json");
        print(json_encode($rows, JSON_PRETTY_PRINT));
    }

?>
