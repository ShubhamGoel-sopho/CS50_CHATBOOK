$(document).ready(function(){
    
    //listen for the click event for the for the send button (sending messages to the user)
    $("#send").click(function(){
        var Message = $("#chat").val();
        var Friend = $('select').val();
        
        if(Message !== "" && Friend != "")
        {
            $.post("../chat.php",
                {
                    Message:Message,
                    Friend:Friend
                },
                function(data)
                {
                    
                    $("#feedback").addClass("alert-success").text("").fadeIn(500).html("<p>"+data+"<p>").fadeOut(2000);
                    $('textarea').val("");
                }
            ).error(function(){
                $("#feedback").addClass("alert-danger").text("").html("<p>Not Sent!<p>");
            });
        }
        else
        {
            $("#feedback").addClass("alert-danger").text("").html("<p>Please Fill Required Fields!<p>");
        }
        return false;    
    });
    
    //listen for the click event for searching the friend button 
    $("#friend_button").click(function(){
       var friend = $("#fb_friends").val();
       
       if(friend != "")
       {
           window.location.href = "https://ide50-shubhamgoel9512.c9users.io/find_friends.php";
       }
       else
       {
           return false;
       }
        
    });
    
   setInterval(function(){
        var parameter =
        {
            chk:true
        };
        $.getJSON("https://ide50-shubhamgoel9512.c9users.io/load.php",parameter)
        .done(function(data, textStatus, jqXHR) {
            
            var messages = "<div class='list-group'>";
            
            for(var i=0;i<data.length;i++)
            {
                if(i%2 == 0){
                    messages += "<a href=\"#\" class=\"list-group-item list-group-item-info\"><h5 class=\"list-group-item-heading\"><strong>"+data[i].message+"</strong></h5><p class=\"list-group-item-text\"><b>Sent by:</b><i>"+data[i].sender_username+"</i>   <b>Sent-To:</b><i>"+data[i].receiver_username+"</i><br>Time:<i>"+data[i].time_of_message+"</i></p></a>";
                }
                else
                {
                     messages += "<a href=\"#\" class=\"list-group-item list-group-item-danger\"><h5 class=\"list-group-item-heading\"><strong>"+data[i].message+"</strong></h5><p class=\"list-group-item-text\"><b>Sent by:</b><i>"+data[i].sender_username+"</i>   <b>Sent-To:</b><i>"+data[i].receiver_username+"</i><br>Time:<i>"+data[i].time_of_message+"</i></p></a>";
                }
                    
            }
            messages += "</div>";
            //var myObjs = JSON.parse(data);
            $("#chat_room").html(messages);
        
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
    
            // log error to browser's console
            console.log(errorThrown.toString());
        });
    },5000);
    
    $("#post").click(function(){
        var Post = $("#post_text").val();
       
        
        if(Post !== "")
        {
            $.post("../post.php",
                {
                    Post:Post
                },
                function(data)
                {
                    
                    $("#feedback").addClass("alert-success").text("").fadeIn(500).html("<p>"+data+"<p>").fadeOut(2000);
                    $("#post_text").val("");
                }
            ).error(function(){
                $("#feedback").addClass("alert-danger").text("").html("<p>Some Error Occured!<p>");
            });
        }
        else
        {
            $("#feedback").addClass("alert-danger").text("").html("<p>Please Fill Required (Post) Field!<p>");
        }
        return false;    
    });  
    
    
});
