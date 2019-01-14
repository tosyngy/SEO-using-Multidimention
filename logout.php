<?php
ob_start();
session_start();

if(isset($_SESSION['id'])){
   $_SESSION["id"]="";
   session_destroy();
    header("location: schoollog.php");
}else{
    header("location: schoolreg.php");
}
?>
