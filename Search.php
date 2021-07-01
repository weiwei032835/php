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
      

       //建立SQL語法
       
       $name = $_POST["name"];
       
      
       $sql = "SELECT * FROM member WHERE Name like ?";
       // $sql = "INSERT INTO member(Name) VALUES ('"$Name"')";
      
       $statement = $pdo->prepare($sql);
       $statement->bindValue( 1, "%".$name."%");
       $statement->execute();
       
       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       //將二維陣列取出顯示其值
       foreach($data as $index => $row){
        echo $row["Name"];   //欄位名稱
              //echo " / ";
              // echo $row["PWD"];    //欄位名稱
              // echo " / ";
              // echo $row["CreateDate"];    //欄位名稱
              // echo " / ";
              // echo $row["LastLoginDate"]; //欄位名稱
              // echo "<br/>";
       }

?>