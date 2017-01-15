
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

