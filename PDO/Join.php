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
     
       //宣告變數接帳密

       $name = htmlspecialchars($_POST["name"]); //宣告的值兩者要一樣才會抓到對應post進去
       $pwd = htmlspecialchars($_POST["pwd"]);

        //建立PDO物件，並放入指定的相關資料
        $pdo = new PDO($dsn, $db_user, $db_pass);
 
       //---------------------------------------------------
 
       //01-建立SQL 這邊是寫死的 透過字串和變數結合丟進去
       //$sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ('".$name."', '".$pwd."', NOW())"; 
      
       $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ( ?, ?, NOW())"; 

       $statement = $pdo->prepare( $sql );
       $statement->bindValue(1, $name);
       $statement->bindValue(2, $pwd);
       $statement->execute();
       
     
     //封裝二維陣列
     $data = $statement->fetchAll();

     if(count($data) > 0){
         echo "登入成功";
     }else{
         echo "登入失敗，帳號或密碼錯誤";
     }
       //01-執行
        //$pdo->exec($sql);
        //header("Location: Select.php"); 
        //加入這行可以顯示在select.php

       

?>