<?php
$response = array();  
   
// include db connect class  
require_once __DIR__ . '/db_connect.php';  
   
// connecting to db  
$db = new DB_CONNECT();  
// get all products from products table  
$result = mysqli_query($db->connect(),"SELECT *FROM user") or die("mysqli_query");  
$raw=mysqli_fetch_array($result);
$response['name']="liulianhua";//$raw['name'];
$response['age']="1000";//$raw['age'];
 // echoing JSON response  
        echo json_encode($response);  
?>