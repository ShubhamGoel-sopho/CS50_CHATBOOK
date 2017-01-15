<?php
    //require config files
    require("../includes/config.php");
    
    if(isset($_SESSION["id"]) ){
        if($_GET['chk']){
            receive_message();
        }
    }    
    
?>