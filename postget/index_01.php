<?php

    echo $_POST["account"]; //array
    echo"<br/>";
    echo $_POST["pwd"];  //容易報錯

    // if(isset($_POST["pwd"])){
    //     echo $_POST["pwd"];
    // }
    //用if isset判斷式可以判斷是否存在 不會看到報錯

    //echo isset($_POST["pwd"]) ? ($_POST["pwd"])  : "";   //true : false; 三源運算子 防呆寫法 精簡寫法

?>