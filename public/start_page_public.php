<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C$50 CHATBOOK</title>
    <!-- Bootstrap -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/framework.css" rel="stylesheet">
       
        
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  
  <body>
 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="30">
  <div class="container-fluid" id="wrapper">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
	      <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><img src="/img/college-students-800x533.jpg" alt="First slide image" width="960" height="540" class="center-block image-fill">
	        <div class="carousel-caption">
	          <h1>CHAT BOOK <span class="glyphicon glyphicon-globe"></span></h1>
	          <h4><p>Personal Chat App</p></h4>
            </div>
          </div>
	      <div class="item"><img src="/img/project3_1.jpg" alt="Second slide image" class="center-block image-fill">
	        <div class="carousel-caption">
	          <h2>Find Your Friends</h2>
	          <p><a href="login.php" data-toggle="tooltip" title="Log In"><b>And Get Started</b></a></p>
            </div>
          </div>
	      <div class="item"><img src="/img/201620612-thought-bubble-chatting-message-executive.jpg" alt="Third slide image" class="center-block image-fill">
	        <div class="carousel-caption">
	         
	          <p><div class="row">
            	<a href="register.php" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 btn btn-danger btn-lg">Register For Free <span class="glyphicon glyphicon-log-in"></span></a>
              </div></p>
            </div>
          </div>
        </div>
	    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
	    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
	        </a></div>
	        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="475">
              <ul class="nav navbar-nav">
                <li><a href="register.php">SIGN UP</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact_form">CONTACT US</a></li>
              </ul>
            </nav>
        <br>
        
       <div  id="about" class="container-fluid bg-grey slideanim" style="padding: 60px 50px">
          <div class="row">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-globe logo"></span> 
            </div>
            <div class="col-sm-8">
              <h2><strong>ABOUT</strong></h2>
              <h4>This application provides to you dynamic things like which have to be on social network
              .Here you can find your friends. Connect with them. Chat with them.Post your thoughts on your
              timeline & All these things for free. Just Sign Up with Us & Enjoy!!!.
              
              </h4>
            </div>
          </div>
    </div><br>
    <!--contact form -->
    <div  id="contact_form" class="container-fluid bg-grey slideanim">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> New Delhi, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9990906406</p>
      <p><span class="glyphicon glyphicon-envelope"></span> shubhamgoel9612@outlook.com</p> 
    </div>
    <form method="POST" action="contact.php">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div></form>
  </div>
</div>
    
    
    <!----------------->
    <footer>
        
        <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span></a>
     <p>&copy; All Rights Reserverd (2017)</p>
     <span id="date_time"></span>
     </footer>
  </div>
   
   <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        
        <script src="/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            
            // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        
           // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
        
            // Prevent default anchor click behavior
            event.preventDefault();
        
            // Store hash
            var hash = this.hash;
        
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
        
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
              });
            } // End if
          });
          
          $(window).scroll(function() {
          $(".slideanim").each(function(){
            var pos = $(this).offset().top;
        
            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
        
        
          function date_time()
          {
            setInterval(function(){
              var dat = new Date();
              $("#date_time").text(dat);
            },1000);
          }
          date_time();
          
        });
</script>


            
      

    
  </body>
</html>