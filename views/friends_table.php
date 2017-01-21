<br><br><br><br>
<a href="<?=$_SERVER["HTTP_REFERER"] ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
<br><hr>
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="table-responsive">
             <?php
                $rows = CS50::query("SELECT * FROM users WHERE name LIKE ?","%".$friends."%");
             ?>    
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <b><th><h4>Name</h4></th></b>
                        <b><th><h4>User Name</h4></th></b>
                        <b><th><h4>Connect ?</h4></th></b>
                        <b><th><h4>View Profile <span class='glyphicon glyphicon-user'></span></h4></th></b>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        if(!empty($rows))
                        {
                            foreach($rows as $row)
                            {
                                echo "<tr>";
                                echo "<td>".strtoupper($row["name"])."</td>";
                                echo "<td>".$row["username"]."</td>";?>
                                <td><button id='connect' class='btn btn-info' onclick="connect_with(event);"><?=$row["username"] ?><span class='glyphicon glyphicon-user'></span></button></td>
                                <td><button id="view_profile" class="btn btn-danger" onclick="redir_to (event);"><?=$row["username"] ?></button></td>
                                <?php
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-12 col-xs-12 alert" id="feedback"></div>
</div>
<br/><hr>
<div class="row thumbnail" id="hide_first" style="display:none">
    <div class="col-lg-12">
    	<img class="img-fluid img-thumbnail float-left" id="profile_from_outside_view_image" src="img/noimage.png" alt="No Image Provided" style="height:350px;width:250px" />
    </div>
    <br><hr>
    <div class="col-lg-10 col-sm-10 col-xs-12 col-md-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <div id="profile_from_outside_view">
            
        </div>   
    </div>
</div>