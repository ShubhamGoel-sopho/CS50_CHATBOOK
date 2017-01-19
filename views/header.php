<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            
         <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        
        <!-- for fonts -->
        <script src="https://use.fontawesome.com/502ed103c2.js"></script>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
         <style>
          div#load_screen{
          	background: #ffffff;
          	opacity: 1;
          	position: fixed;
            z-index:10;
          	top: 0px;
          	width: 100%;
          	height: 1600px;
          }
         div#load_screen > div#loading{
          	width:120px;
          	height:24px;
          	margin: 300px auto;
          }
        </style>
        <script>
          window.addEventListener("load", function(){
          	var load_screen = document.getElementById("load_screen");
          	document.body.removeChild(load_screen);
          });
        </script>	
  
    </head>

  <body>
    <div id="load_screen"><div id="loading"><img src="img/orange.gif"/></div></div>
	<div class="container">
	   <div id="top"><?php if (!empty($_SESSION["id"])): ?>
    	 <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    	    <div class="container-fluid">
    	      
    	      <div class="navbar-header">
    	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    	        <a class="navbar-brand" href="index.php">Chat Book <span class="glyphicon glyphicon-globe"></span></a></div>
    	      
    	      <div class="collapse navbar-collapse" id="topFixedNavbar1">
    	        <ul class="nav navbar-nav">
    	          <li ><a  href="contact.php">Contact Us</a></li>
    	          <li ><a  href="faq.php">FAQ's</a></li>
    	          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More<span class="caret"></span></a>
    	            <ul class="dropdown-menu" role="menu">
    	              <li><a href="dev_profile.php">Developer Profile</a></li>
    	              <li class="divider"></li>
    	              <li><a href="friends.php">Friends</a></li>
    	              <li class="divider"></li>
    	              <li><a href="edit_profile.php">Edit Profile</a></li>
    	              <li class="divider"></li>
    	              <li><a href="upload_your_image.php">Upload Your Image</a></li>
                    </ul>
                  </li>
                </ul>
    	        <form class="navbar-form navbar-left" role="search" action="find_friends.php" method="POST">
    	          <div class="form-group">
    	            <input type="text" id="fb_friends" name="fb_friends" class="form-control" placeholder="Find Friends"/>
                  </div>
    	          <button type="submit" id="friend_button" class="btn btn-default">Submit</button>
                </form>
    	        <ul class="nav navbar-nav navbar-right">
    	           
    	          <li><a href="logout.php">Logout</a></li>
    	        </ul>
              </div>
    	      
            </div>
    	   
          </nav>
          <?php endif ?>
        </div>
    
            
             