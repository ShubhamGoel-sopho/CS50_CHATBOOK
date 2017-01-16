<?php
	
	//require config file
	require("../includes/config.php");
	
	if(isset($_SESSION["id"]) && $_SERVER["REQUEST_METHOD"] == "GET")
	{
		render("dev_profile_view.php",["title" => "Shubham Goel,Profile"]);
	}
	else
	{
		redirect("login.php");
	}
	

?>