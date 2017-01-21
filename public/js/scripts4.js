
function connect_with(event)
{
   var trigger = event.srcElement.textContent;
    //send an request to some php page without refreshing the webpage using ajax
    $.post("https://ide50-shubhamgoel9512.c9users.io/connect_with_friend.php",
        {
            name_of_friend:trigger   
        },
        function(data)
        {
            //feedback data sent by the server php file
            $("#feedback").text("").addClass("alert-success").html("<p>"+data+"</p>");
        }
    ).error(function(){
        $("#feedback").text("").addClass("alert-danger").html("<p>Some error occured!</p>");
    });
    
    
}

//function to redirect the user to particular page 
function redir_to (event)
{
    var trig = event.srcElement.textContent;
    $('#hide_first').show();
    $.post("https://ide50-shubhamgoel9512.c9users.io/see_profile_click.php",
        {
            name_of_friend:trig   
        },
        function(data)
        {
             var message = "<h2 class=\"text-primary\">POSTS</h2><br><ul class='list-group'>";
            
            for(i = 0;i<data.length;i++)
            {
                message +="<li class=\"list-group-item\">"+data[i].post+"</li>";
            }
            message += "</ul>";
            //feedback data sent by the server php file
            $("#profile_from_outside_view").text("").html(message);
        }
    ).error(function(){
        $("#profile_from_outside_view").text("").addClass("alert-danger").html("<p>Some error occured!</p>");
    });
    
    $.post("https://ide50-shubhamgoel9512.c9users.io/see_profile_click_image.php",
        {
            name_of_friend:trig   
        },
        function(data)
        {
            if(data != ""){
                //feedback data sent by the server php file
                $("#profile_from_outside_view_image").attr("src",data);
            }
            else
            {
                $("#profile_from_outside_view_image").attr("src","");
            }
        }
    ).error(function(){
        $("#profile_from_outside_view").text("").addClass("alert-danger").html("<p>Some error occured!</p>");
    });
    
}

