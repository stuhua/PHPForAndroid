<?php
class DB_CONNECT{
	
	public function __construct(){
		  $this->connect();  
	}
	function __destruct(){
	//	$this->close();  
	}
	public function connect(){
		   require_once __DIR__ . '/db_config.php';  
   
        // Connecting to mysql database  
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE) or die ("could not connect to mysql");
        if (!$con) 
        { 
            echo("连接错误: " ); 
        } 		
        // Selecing database  
		//USE DB_DATABASE;
        $db = mysqli_select_db($con,"DBTest")or die ("no mysqli_select_db	");  
		
        // returing connection cursor 
        return $con;  
	}
	
}
?>