<br><br><br><br>
<a href="<?=$_SERVER["HTTP_REFERER"] ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
<br><hr>
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
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
                                <?php
                                echo "</tr>";
                            }
                        }
                        
                        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 alert" id="feedback"></div>
</div>