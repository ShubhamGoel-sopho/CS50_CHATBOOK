$(document).ready(function(){
   //on submit of the login form validation from the client side
   $("#login").click(function(){
       var username = $("#username").val();
       var password = $("#password").val();
       
       if(username != "" && password != "")
       {
           
           return true;
       }
       else
       {
           $(".feedback_window").html("<div class=\"alert alert-danger\"><p>Field's can't be left empty !!!</p></div>");
           return false;
       }
    }); 
});