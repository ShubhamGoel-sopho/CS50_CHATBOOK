<div class="jumbotron text-center" id="wrapper">
    <h1>CHAT BOOK</h1> 
    <p>Get Connected <span class="glyphicon glyphicon-heart"></span></p> 
</div>
<div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
      	<form class="form-group-lg" action="login.php" method="POST">
    
            <div class="form-group">
                <label for="username">User Name</label>
                <input class="form-control" type="text" id="username" name="username"
                        placeholder="User name" maxlength="25" required />
                        
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password"
                        placeholder="password" minlength="8" maxlength="20" pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}" required  />
            </div>
           
            <div class="row">
            	<button type="submit" id="login" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-danger btn-lg">Login <span class="glyphicon glyphicon-log-in"></span></button>
            
            </div>
        </form>
    </div>
</div>
<br> 
<div class="row"><div class="col-lg-offset-4">
or <b>Not have Account ?</b> <a  class="btn btn-success" href="register.php">Sign Up <span class="glyphicon glyphicon-new-window"></span></a>
</div></div>
<br>
<div class="feedback_window"></div>