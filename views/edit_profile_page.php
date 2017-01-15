<br><br><br><br>
<a href="<?=$_SERVER["HTTP_REFERER"] ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
<br><hr>
<?php
    $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
?>
<div class="row">
    <div class="col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 slideanim">
        <h2 class="text-primary">EDIT PROFILE</h2>
        <!--tabs for diffrent forms-->
				<ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#nameTab" data-toggle="tab"><strong>Change Name</strong></a>
                    </li>
                    <li>
                        <a href="#emailTab" data-toggle="tab"><strong>Change Email</strong></a>
                    </li>
                    <li>
                        <a href="#passwordTab" data-toggle="tab"><strong>Change Password</strong></a>
                    </li>
                     
                </ul>
                <div class="tab-content">
                    <div id="nameTab" class="tab-pane active">
                        <div class="panel panel-default">
    						<div class="panel-body">
        						<div class="row">
                                  <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                  	<form class="form-group-lg" method="POST" action="edit_profile.php">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" id="name" class="form-control" maxlength="40" minlength="5" required type="text" placeholder="Full Name" />
                                        </div>
        					            <button type="submit" id="change_name" class="col-md-10 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-success btn-lg">Change Name</button> 
                                    </form>
                                  </div>
                                </div>
                                <br>
    						</div>
						</div>
                    </div>
                    <div id="emailTab" class="tab-pane">
                        <div class="panel panel-default">
    						<div class="panel-body">
    						    <div class="row">
                                  <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                  	<form class="form-group-lg" method="POST" action="edit_profile.php">
                                         <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" id="email" class="form-control" maxlength="50"  required type="text" 
                                                placeholder="Email" />
                                        </div>
        					            <button type="submit" id="change_email" class="col-md-10 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-success btn-lg">Change Email</button> 
                                    </form>
                                  </div>
                                </div>
                                <br>
                          
    						</div>
    					</div>
                    </div>
                    <div id="passwordTab" class="tab-pane">
                        <div class="panel panel-default">
    						<div class="panel-body">
    						    <div class="row">
                                  <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                  	<form class="form-group-lg" method="POST" action="edit_profile.php">
                                          <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" id="oldpassword" name="old_password"
                                                    placeholder="Your Old Password" minlength="8" maxlength="20" pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}" required  />
                                                    
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">New Password</label>
                                            <input class="form-control" type="password" id="new_password" name="new_password"
                                                    placeholder="New Password" minlength="8" maxlength="20" pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}" required />
                                                <h6>Please Enter A password btw 8-20 characters having atleast one upper-case,one lower-case,number and special character</h6>
                                        </div>
        					            <button type="submit" id="change_password" class="col-md-10 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-success btn-lg">Change Password</button> 
                                    </form>
                                  </div>
                                </div>
                                <br>
                          
                          
    						</div>
    					</div>
                    </div>
                </div>
        <!--tabs for diffrent forms-->
        
         <div class="feedback_window"></div>
    </div>
</div>