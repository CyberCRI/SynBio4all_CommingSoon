<?php   
        
	if(!isset($_GET["obj"])){
		$_GET["obj"] = "com";
	}
	if(!isset($_GET["action"])){
		$_GET["action"] = "disp";
	}
	//this switch allow to extends the numbers of objects
	switch ($_GET["obj"]) {
		default:
		require "./controler/commingSoon.php";
	}
	//this switch allow to extends the numbers of actions
	switch ($_GET["action"]) {
		case "submitmail":
			submitMail();
			break;
                case "updatelang":
                        updateLanguage();
                        break;
		default:
			display_page();
	}
?>