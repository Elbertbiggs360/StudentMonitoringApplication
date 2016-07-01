<?php
    session_start();
    include'adminIncludeParameters.php';
    adminHome();

    $a = $_REQUEST['action'];
	$b = $_REQUEST['connect'];
    $c = $_REQUEST['view'];
    $d = $_REQUEST['insert'];

    switch($a){
	    case "logout":
            logout();
            break;
            
	}
    switch($c){
        case "viewTeachers":
            DisplayTeachers();
            break;
    }
    switch($d){
        case "insStudent":
            StudentRegistrationForm();
            break;
    }

?>

