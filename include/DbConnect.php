<?php

/**
* Handling Database connection
*/
class DbConnect{
	
	private $conn;
	
	function __construct(){	
	}
	
	/**
	* Establishing a database connection
	* @return Database Connection handler
	*/
	function connect(){
            print_r('conf bfr');
		require_once dirname(__FILE__).'/Config.php';
		print_r('conf aftr');
		//connecting mysql database
		$this->conn	=	new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                print_r('aftr conn');
                //check for database connection error
                if(mysqli_connect_errno()){
                    echo 'Failed to connect to MySQL '.mysqli_connect_error();
                }
                else{
                    print_r('conn success');
                }
                
                //returning connection resource
                return $this->conn;
	}	



}

?>