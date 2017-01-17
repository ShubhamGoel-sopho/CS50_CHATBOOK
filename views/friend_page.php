<br><br><br><br>
<a href="<?=$_SERVER["HTTP_REFERER"] ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
<br><hr>
<?php
    $row = CS50::query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
    $rows_for_friend = CS50::query("SELECT * FROM friends WHERE (friend_1 = ? OR friend_2 = ?)",$row[0]["username"],$row[0]["username"]);
    //$row_for_posts = CS50::query("SELECT * FROM posts WHERE user_id = ? ORDER BY date_time",$_SESSION["id"]);
?>
<div class="row">
    <div class="col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
        <h2 class="text-primary">YOUR FRIENDS </h2>
        <div class="panel-group">
        <?php
            foreach($rows_for_friend as $friend)
            {
                echo "<div class=\"panel panel-danger\">";
                if($friend['friend_1'] == $row[0]['username']){
                    $name = CS50::query("SELECT * FROM users WHERE username = ?",$friend["friend_2"]);
                    echo "<div class=\"panel-heading\"><h4><i>".$name[0]["name"]."</i></h4></div>";
                    echo "<div class=\"panel-body\"><p><i>Username : </i>".$name[0]["username"]."</p></div>";
                }
                else{
                    $name = CS50::query("SELECT * FROM users WHERE username = ?",$friend["friend_1"]);
                    echo "<div class=\"panel-heading\"><h4><i>".$name[0]["name"]."</i></h4></div>";
                    echo "<div class=\"panel-body\"><p><i>Username : </i>".$name[0]["username"]."</p></div>";
                }
                    
                echo "</div>";
            }
        ?>
        </div>
    </div>
</div>    