<?php  
    class ConnectDB
    {
        public function DBConnection($hostname, $username, $password, $db)
        {
            try 
            {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$db, $username, $password);
                return $con;		
            } 
            catch (PDOException $e) 
            {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }  
        }
    }
	
?>
    