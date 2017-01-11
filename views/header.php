<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        
        <?php if (isset($style)): ?>
        <link href="/css/styles<?= htmlspecialchars($style) ?>.css" rel="stylesheet"/>
        <?php else: ?>
        <link href="/css/styles.css" rel="stylesheet"/>
        <?php endif ?>
        
        <?php if (isset($title)): ?>
            <title>C$50 CHAT <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 CHAT</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts<?=htmlspecialchars($script) ?>.js"></script>
        
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    </head>

  <body>
	<div class="container">
	   <div id="top"><?php if (!empty($_SESSION["id"])): ?>
    	  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    	    <div class="container-fluid">
    	      <!-- Brand and toggle get grouped for better mobile display -->
    	      <div class="navbar-header">
    	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    	        <a class="navbar-brand" href="index.php">Chat Book <span class="glyphicon glyphicon-globe"></span></a></div>
    	      <!-- Collect the nav links, forms, and other content for toggling -->
    	      <div class="collapse navbar-collapse" id="topFixedNavbar1">
    	        <ul class="nav navbar-nav">
    	          <li ><a href="faq.php">FAQ</a><span class="sr-only">(current)</span></a></li>
    	          <li ><a  href="contact.php">Contact Us</a></li>
    	          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More<span class="caret"></span></a>
    	            <ul class="dropdown-menu" role="menu">
    	              <li><a href="dev_profile.php">Developer Profile</a></li>
    	              <li class="divider"></li>
    	              <li><a href="friends.php">Friends</a></li>
    	              <li class="divider"></li>
    	              <li><a href="edit_profile.php">Edit Profile</a></li>
                    </ul>
                  </li>
                </ul>
    	        <form class="navbar-form navbar-left" role="search" action="find_friends.php" method="POST">
    	          <div class="form-group">
    	            <input type="text" class="form-control" placeholder="Find Friends">
                  </div>
    	          <button type="submit" class="btn btn-default">Submit</button>
                </form>
    	        <ul class="nav navbar-nav navbar-right">
    	          <li><a href="logout.php">Logout</a></li>
    	        </ul>
              </div>
    	      <!-- /.navbar-collapse -->
            </div>
    	    <!-- /.container-fluid -->
          </nav>
          <?php endif ?>
        </div>
    
            
             