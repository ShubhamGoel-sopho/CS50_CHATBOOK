<?php
    //require conf files
    require("../includes/config.php");
    //require("../includes/class.phpmailer.php");
    //require("../includes/class.smtp.php");
    //this page gets the ajax request from the scripts4.js and enter the entry in the friend table
    
    if(isset($_POST["name_of_friend"]) && !empty($_POST["name_of_friend"]))
    {
        $row = CS50::query("SELECT * FROM `users` WHERE id = ?",$_SESSION["id"]);
        $friend_1 = $row[0]["username"];
        $friend_2 = $_POST["name_of_friend"];
        
        //check if the request is not sent to same person inorder to trick server
        if($friend_1 !== $friend_2){
            
            //check if they are already friend or not
            $check = CS50::query("SELECT * FROM friends WHERE (friend_1 = ? AND friend_2 = ?) OR (friend_1 = ? AND friend_2 = ?)",$friend_1,$friend_2,$friend_2,$friend_1);
            //perfrom the insertion in to table
            if(count($check) === 0){
                $val = CS50::query("INSERT INTO friends (friend_1,friend_2) VALUES(?,?)",$friend_1,$friend_2);
                if($val == true)
                {
                    echo "You Are Connected To ".$friend_2."!";
                    //$row_for_mail = CS50::query("SELECT * FROM users WHERE username = ?",$friend_2);
                    /*----------------------------------------------------------------------------*/
                    /*mail will be sent to the person which is being connected*/
                    
                    
                       /* $to = $row_for_mail[0]["email"];
                        $subject = "CHAT BOOK :-< New Friend Connected !!!";
                        
                        $message = "
                        <html>
                        <head>
                        <title>C\$50 CHAT BOOK MAIL</title>
                        </head>
                            <body>
                                <p>Hi,".$row_for_mail[0]["name"]."<br>
                                you have been recently added (connected) with ".$row[0]["name"]." ,
                                Hope you'll enjoy your chat with this person.THANK YOU!
                                </p>
                            </body>
                        </html>
                        ";
                        
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
                        $from = "shubhamgoel9512@gmail.com";
                        // More headers
                        $headers .= 'From: $from '. "\n";
                        
                        
                        mail($to,$subject,$message,$headers);
                        
                        $mail = new PHPMailer();
                         // configure mailer
                         // http://phpmailer.worxware.com/index.php?pg=methods
                         // http://phpmailer.worxware.com/index.php?pg=properties
                         // https://www.google.com/settings/u/0/security/lesssecureapps
                         $mail->IsSMTP();
                         $mail->Host = "smtp.gmail.com";
                         $mail->Password = "TODO";
                         $mail->Port = 587;
                         $mail->SMTPAuth = true;
                         $mail->SMTPDebug = 1;
                         $mail->SMTPSecure = "tls";
                         $mail->Username = "shubhamgoel9512@gmail.com";
                         // set From:
                         $mail->From = "shubhamgoel9512@gmail.com";
                         // set body
                         $mail->Body = "<html>
                                                <head>
                                                <title>C\$50 CHAT BOOK MAIL</title>
                                                </head>
                                                    <body>
                                                        <p>Hi,".$row_for_mail[0]["name"]."<br>
                                                        you have been recently added (connected) with ".$row[0]["name"]." ,
                                                        Hope you'll enjoy your chat with this person.THANK YOU!
                                                        </p>
                                                    </body>
                                                </html>
                                                ";
                         
                         $mail->addAddress($row_for_mail[0]["email"]);
                         // send email
                         if ($mail->Send())
                         {
                             echo "You Are Connected To ".$friend_2."! And Mail is sent!!!";
                         }
                         else
                         {
                            echo "You Are connected To ".$friend_2."! But Mail is Not Sent :(".$mail->ErrorInfo."!";
                         }
                         // clear To: field
                         $mail->ClearAddresses();
                         */

                        
                        
                        
                }
                else
                {
                    echo "Friend Request Not Sent :(";
                }
            }
            else
            {
                echo "You Both Are Already Connected To Each Other!";
            }
        }
        else
        {
            echo "Friend Request Can't be Sent To The Same Person !";
        }
    }
    


?>
                    
                    
                    
                    
                    
                    
                    
                    