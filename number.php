<?php 
session_start();
$_SESSION['answer']=rand(1000,9999);

echo $_SESSION['answer'];

?>