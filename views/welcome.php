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
                         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                           <div class="form-group" id="friend_for_select">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-offset-8 col-sm-4  col-md-4 col-xs-offset-6 col-xs-6">
                            <button id="scroll_to_bottom" data-toggle="tooltip" title="Scroll To Bottom" class="btn btn-info" style="border-radius:100%"><span class="glyphicon glyphicon-chevron-down"></span></button>
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
        <div id="chat_room" class="col-lg-12"></div>
    </div>
</div>
</div>