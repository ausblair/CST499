<?php

class Connect { 
    public $connection;
 
    function __construct() 
    { 
       $this->connection = new mysqli('localhost','root','','course_enrollment_system') or die("Unable to connect");
    }      

    function executeQuery($con,$sql) {
        $result = mysqli_query($con, $sql);
    }
} 

$newConnection = new Connect();
?>