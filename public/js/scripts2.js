$(document).ready(function(){
   //on submit of the login form validation from the client side
   $("#register").click(function(){
       var username = $("#username").val();
       var password = $("#password").val();
       var name = $("#name").val();
       var con_password = $("#confirm_password").val();
       if(username != "" && password != "" && con_password != "" && password != "")
       {
           if(con_password == password)
           {
                return true;    
           }
           else
           {
                $(".feedback_window").html("<div class=\"alert alert-danger\"><p>Password are not matching !!!</p></div>");
                return false;
           }
        }
       else
       {
           $(".feedback_window").html("<div class=\"alert alert-danger\"><p>Field's can't be left empty !!!</p></div>");
           return false;
       }
    }); 
});