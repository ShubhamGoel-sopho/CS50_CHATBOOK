<div class="jumbotron text-center" id="wrapper">
    <h1>CHAT BOOK</h1> 
    <p>Get Connected <span class="glyphicon glyphicon-heart"></span></p> 
</div>
<div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
      	<form class="form-group-lg" method="POST" action="register.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" class="form-control" maxlength="40" minlength="5" required type="text" 
                placeholder="Full Name" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" id="email" class="form-control" maxlength="50"  required type="text" 
                placeholder="Email" />
        </div>
        <div class="form-group">
            <label for="username">Choose Username</label>
            <input name="username" id="username" class="form-control" maxlength="25" minlength="5" required type="text" 
                    placeholder="User Name" />
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password"
                    placeholder="password" minlength="8" maxlength="20" pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}" required  />
            <h6>Please Enter A password btw 8-20 characters having atleast one upper-case,one lower-case,number and special character</h6>        
        </div>
        <div class="form-group">
            <label for="confirm_password">Retype Password</label>
            <input class="form-control" type="password" id="confirm_password" name="confirm_password"
                    placeholder="Retype Password" minlength="8" maxlength="20" pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}" required />
        </div>
    <button type="submit" id="register" class="col-md-10 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-success btn-lg">Sign up <span class="glyphicon glyphicon-log-in"></span></button> 
</form>
</div></div><br>
    <div class="row"><div class="col-lg-offset-5">
    or <a  class="btn btn-danger btn-lg" href="login.php">log in <span class="glyphicon glyphicon-new-window"></span></a>
    </div></div>
    <br>
    <div class="feedback_window"></div>