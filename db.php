<?php
//session_start();
$host="localhost";
$user="root";
$password="";
$database="seach_engine";
$port="3306";
$con=mysqli_connect($host, $user, $password, $database, $port);
if($con){
    //echo 'successful';
}else{
    echo 'db connection error';
}
        
?>










