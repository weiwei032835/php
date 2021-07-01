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
        if (('' != $_POST["account"] || $_POST["account"] != null) && 
        '' != $_POST["password"] || $_POST["password"] != null){
            $account = "'".$_POST["account"]."'";
            $password = "'".$_POST["password"]."'";
        
        
        
        //建立SQL  
         $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ($account, $password, NOW())";
        //執行  不需回傳語法
         $pdo->exec($sql);

        //---------------------搜尋是否註冊成功

        $selectSql = "SELECT * FROM member WHERE Name = ? and PWD = ? "; //要有where條件
        
        $statement = $pdo->prepare($selectSql);
        $statement->bindParam( 1, $_POST["account"]);
        $statement->bindParam( 2, $_POST["password"]);
        
        $statement->execute();

        //封裝二維陣列
        $data = $statement->fetchAll();

        if(count($data) > 0){
            echo "註冊成功";
        }else{
            echo "註冊失敗";
        }
                }
            


?>