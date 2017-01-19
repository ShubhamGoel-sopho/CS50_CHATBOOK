<?php
    
    require("../includes/config.php");
    
    if(isset($_SESSION["id"])){
        if(isset($_FILES["file"]["type"]))
        {
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
            && in_array($file_extension, $validextensions)) {
                if ($_FILES["file"]["error"] > 0)
                {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
                }
                else
                {
                    if (file_exists("upload/" . $_FILES["file"]["name"])) {
                        echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
                    }
                    else
                    {
                        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                        $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
                        
                        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                        //here we need to perform the databasing
                        $count = CS50::query("SELECT * FROM images WHERE user_id = ?",$_SESSION["id"]);
                        $val = false;
                        if(count($count) === 0)
                        {
                            $val = CS50::query("INSERT INTO images (user_id,image_name) VALUES(?,?)",$_SESSION["id"],$targetPath);
                        }
                        elseif(count($count) === 1)
                        {   
                            $old_image_name = $count[0]["image_name"];
                            $val = CS50::query("UPDATE images SET image_name = ? WHERE user_id = ?",$targetPath,$_SESSION["id"]);
                            
                            //change the permission of the old file --> no need to change the permissions
                            //chmod($old_image_name,777);
                            //delete old file from the upload directory
                            $is_deleted = unlink($old_image_name);
                            
                        }
                        
                        if($val && $is_deleted){
                            echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
                            echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                            echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
                            echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                            echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
                        }
                        else
                        {
                            echo "SOME PROBLEM OCCURED";
                        }
                    }
                }
            }
            else
            {
                echo "<span id='invalid'>***Invalid file Size(Should Be (less than 100KB) or Type***<span>";
            }
        }
    }    
?>
 

