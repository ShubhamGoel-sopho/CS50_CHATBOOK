 <br><br><br><br>
<a href="<?=$_SERVER["HTTP_REFERER"] ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
<br><hr>
<div class="row">
    <div class="col-lg-6 col-sm-8 col-xs-12 col-md-6 col-lg-offset-3 col-sm-offset-2 col-md-offset-2">
        <div class="thumbnail">
            <div class="alert alert-success">
                <h1 class="text-primary text-center">CHATBOOK Image Upload</h1>
            </div>
            <hr>
            <form id="uploadimage" action="" method="POST" enctype="multipart/form-data">
                <div class="row"><div class="col-lg-offset-3 col-sm-offset-3 col-md-offset-3 col-xs-offset-3">
                <div id="image_preview"><img id="previewing" src="img/noimage.png" class="image-fill img-thumbnail float-center" /></div>  
                </div></div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <div class="row"><div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <input  type="file" id="file" name="file" class="form-control btn btn-lg btn-info"/>
                    </div></div>
                </div>
                <br>
                <div class="form-group">
                    <div class="row"><div class="col-lg-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-offset-1">
                        <button type="submit" value="Upload" class="submit">Upload <span class="glyphicon glyphicon-upload"></span></button>
                    </div></div>                
                </div>
            </form>
        </div>
    </div>
     <div class="col-lg-6 col-lg-offset-3 col-md-offset-3 col-md-6 col-sm-12 col-xs-12 alert">
        <div class="giphy"><img src="img/2.gif" id= "giphy_image" alt="Loading"/></div>
        <div id="feedback">
            
        </div>
    </div>
</div>  