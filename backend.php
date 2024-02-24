<?php
    // mysql:host 表示連結的資料庫位置(localhost、127.0.0.1)
    // charset 表示連結中使用的編碼 (utf8)
    // dbname 表示連線的資料庫名稱
    $connect = "mysql:host=localhost;charset=utf8;dbname=web54j;";

    // PDO 裡面要放入三個參數， 1. 連線資訊，2. 連線的使用者 3. 連線的使用者密碼
    $pdo = new PDO($connect,"root","");

    //建立新增資料的SQL語法
    $sql2 = "INSERT INTO `tickets` ( `first_name`, `last_name`, `phone`, `password`)
              VALUES ( '{$_POST["first_name"]}', '{$_POST["last_name"]}', '{$_POST["phone"]}', '{$_POST["password"]}')";
    
    //啟用session功能
    session_start();
    //判斷ajax傳來的表單資料中的驗證碼是否和session中的驗碼碼一致
    if($_POST["ver"] == $_SESSION['answer']){
        
        //執行新增訂單的SQL語法
        $pdo->exec($sql2);

        //回傳1給前端
        echo 1;
    }
