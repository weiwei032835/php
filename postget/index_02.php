<?php

    $name = $_POST["name"]; //純文字string
    $sex = $_POST["sex"];
    $trans = isset($_POST["trans"]) ? $_POST["trans"] : []; //array
    print_r($trans);
    exit(); //程式中斷點程式碼






    echo '姓名:' .$name;
    echo "<br/>";
    echo '性別:'.$sex;
    echo "<br/>";
    echo '交通工具:';
    //索引迴圈 不用定義i方式
    foreach($trans as $index => $value){
        echo $value;
    }



    //echo($trans);
?>
