
<!-- / 隨機印出10碼亂數密碼，包含英文和數字
//     提示:

//     新增一個genPassword.php
//     定義一個包含英文(a~z)和數字(0~9)的陣列
//     透過迴圈控制10碼顯示長度
//     可運用字串相加於最終顯示10碼亂數密碼 
-->



 <?php
    
          $arr =["a", "b", "c", "d", "e", "f","g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "x", "t", "u", "p", "x", "y","z", "1", "2", "3", "4", "5", "6", "7", "8","9", "0"];

          
          for($i=0; $i<=10; $i++)
          {
              shuffle($arr);
              echo $arr[$i];      
          }
          
 ?>
 
 
 

