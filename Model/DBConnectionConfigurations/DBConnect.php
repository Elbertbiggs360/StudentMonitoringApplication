<?php /*error_reporting(E_ALL ^ E_NOTICE);*/?>

<?php  
    function dbConnect(){
        /*$host = "localhost";
        $userName = "root";
        $pass = "root";
        $dbname = "sma_db";

        
        $con = mysqli_connect($host, "root", "root", $dbname);
	    //check connection
	    if(mysqli_connect_errno())
	    {
		    echo "Failed to connect to the database.";
		    mysqli_connect_errno();
            echo mysqli_connect_errno();
	    }else{	      
           return $con;  
	    }

        */

        $username = "root";
	    $password = "";
	    $hostname = "localhost";
	    $db = "sma_db";
        try {
		    $dbo = new PDO('mysql:host='.$hostname.';dbname='.$db, $username, $password);
            return $dbo;
	    } catch (PDOException $e) {
            echo 123;
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
	    }
       
    }
?>