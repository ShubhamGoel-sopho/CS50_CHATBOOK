<br><br>
<div id="main_box">
    <br><br>
    <div class="alert alert-success">
        <h3>
        <?php
            $row = CS50::query("SELECT * FROM `users` WHERE id = ?",$_SESSION["id"]);
            echo "<b> Hello </b>".strtoupper($row[0]["name"]) ."!  Nice To See You Here.";
        ?>
        </h3>
    </div>
    <p><b>WHAT'S ON YOUR MIND:</b><br></p>
    
<!--form for post,chat & chatting window-->
<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <form class="form-group-lg form-inline">
                    <div class="form-group">
                        <input type="text" name="post" id="post_text" class="form-control" placeholder="Tell Us..." required />
                    </div>
                    <button type="submit" id="post" class="btn btn-info btn-lg">Post</button>
                </form>    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="profile_button">
                <a href="profile.php" class="btn btn-lg btn-success">Your Profile <span class="glyphicon glyphicon-user"></span></a>
            </div>
            <br><br><br><br>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="form-group-lg form-inline">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <textarea rows="3" id="chat" name="chat" placeholder="Start Typing Here..." class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" id="send" class="btn btn-info btn-lg">Send <span class="glyphicon glyphicon-send"></span></button>
                        </div> 
                         <div class="col-lg-8">
                           <div class="form-group">
                            <span><b>Select Your Friend:</b> </span>  
                            <?php
                                 
                                $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
                                $rows = CS50::query("SELECT * FROM friends WHERE (friend_1 = ? OR friend_2 = ?)",$row[0]["username"],$row[0]["username"]);
                                
                            ?>
                            <select class="form-control" name="friend" id="friend" style="margin:3px">
                             
                               <?php
                                 //iterate for every friend in the database for the user
                                 if(!empty($rows)){
                                    foreach($rows as $row1)
                                    {
                                        if($row1["friend_1"] == $row[0]["username"]){?>
                                            <option value="<?=$row1['friend_2']?>"><?php 
                                            $r  = CS50::query("SELECT * FROM users WHERE username = ?",$row1["friend_2"]);
                                            echo $r[0]["name"];
                                            ?></option>
                                    <?php
                                        }else if($row1["friend_2"] == $row[0]["username"]){?>
                                        
                                            <option value="<?=$row1['friend_1']?>"><?php 
                                            $r  = CS50::query("SELECT * FROM users WHERE username = ?",$row1["friend_1"]);
                                            echo $r[0]["name"];
                                            ?></option>
                                       <?php }
                                    }
                                  
                                 }
                                 else
                                 {
                                    echo "<option value='null'>You have no Friends</option>"; 
                                 }
                              ?>

                               
                            </select>
                          </div>
                        </div>
                        
                    </div>              
                </form>
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert" id="feedback">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <h2 class="text text-info">CHAT SCREEN</h2>
        <div id="chat_room" class="col-lg-12">
    </div>
    </div>
</div>