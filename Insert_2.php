<?php

       //MySQL相關資訊
       $db_host = "127.0.0.1";
       $db_user = "root";
       $db_pass = "wendy84she";
       $db_select = "pdo";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       //---------------------------------------------------

       //建立SQL 這邊是寫死的
       $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ('王小明', 'refrg', NOW())";

       //執行
       $pdo->exec($sql);


?>