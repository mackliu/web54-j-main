<?php 
//啟用session功能
session_start();
//產生一個4位數的驗證碼,並存入session
$_SESSION['answer']=rand(1000,9999);

//輸出驗證碼,回傳給前端
echo $_SESSION['answer'];

?>