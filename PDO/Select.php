<?php

       //MySQL相關資訊
       $db_host = "127.0.0.1";
       $db_user = "root";
       $db_pass = "wendy84she";
       $db_select = "pdo"; //資料庫名稱

       //建立資料庫連線物件 固定寫法
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       //---------------------------------------------------

       //$account = $_POST["account"];


       //建立SQL語法
       // $sql ="SELECT * from member where Name like ? ";
       $sql ="SELECT * from member";  //搜尋有資料回傳結果所以用query $statement = $pdo->query($sql);

       $statement = $pdo->prepare($sql);
       // $statement->bindParam( 1, $account);
       // statement 礦石分裂自己命名

       $statement->execute();
       //執行並查詢，會回傳query查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       

       //抓出全部且依照順序封裝成一個二維陣列 重新分裝
       $data = $statement->fetchAll();

       // print_r($data);
       // exit();

       //將二維陣列取出顯示其值
       foreach($data as $index => $row){
        echo $row["Name"];   //欄位名稱
        echo " / ";
        echo $row["PWD"];    //欄位名稱
        echo " / ";
        echo $row["CreateDate"];    //欄位名稱
              echo "<br>";        
       }
 
?>