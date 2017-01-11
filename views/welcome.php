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
    <div class="row"><div class="col-lg-4 col-xs-6 col-md-4 col-sm-6">
      	<form class="form-group-lg form-inline" action="post.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="post" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-info btn-lg">Post</button>
       </form></div>
       <div class="col-lg-2 col-xs-6 col-md-2 col-sm-6">
      <a href="profile.php" class="btn btn-lg btn-info">Your Profile <span class="glyphicon glyphicon-user"></span></a>
    </div>
    
    <div id="chat_room" class="col-lg-6 col-md-6 col-xs-12 col-sm-12"></div>
    
    
</div>



                    
    
      
        
    
                
    
               
    
       
    
</div>