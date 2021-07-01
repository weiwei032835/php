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

        $account = $_POST["account"];
        $password = $_POST["password"];

        //建立SQL  
        //$sql = "SELECT * FROM member WHERE Name = '".$account."'and PWD = '".$password."' ";

        $sql = "SELECT * FROM member WHERE Name = ? and PWD = ? "; //要有where條件
    
        //$sql = "SELECT * FROM member WHERE Name = :N and PWD = :P ";
        
        //$statement = $pdo->query($sql);
        $statement = $pdo->prepare($sql);
        $statement->bindParam( 1, $account);
        $statement->bindParam( 2, $password);
        
        $statement->execute();

        //封裝二維陣列
        $data = $statement->fetchAll();

        if(count($data) > 0){
            echo "登入成功";
        }else{
            echo "登入失敗，帳號或密碼錯誤";
        }

        //    //將二維陣列取出顯示其值
        //    foreach($data as $index => $row){
        //     echo $row["Name"];   //欄位名稱
        //     echo " / ";
        //     echo $row["PWD"];    //欄位名稱
        //     echo " / ";
        //     echo $row["CreateDate"];    //欄位名稱
        //        echo "<br>";	       
    

?>