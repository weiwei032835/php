
    <?php

        //    for($i=0; $i<10; $i++){
        //         echo $i;
        //     }
        
        //利用for loop計算1+2+3+….+50總和? 
        // $sum = 0; //加總
        // for($i=1;$i<=50;$i++){ //條件式在for
           
        //     $sum = $sum + $i;
        // }
        // echo $sum;

        //印出 1~50之間 3的倍數，並計算這些數的總和
        // $sum = 0; //加總
        // for($i=1;$i<=50;$i++){
           
        //     if($i % 3 ==0)
        //     $sum = $sum + $i;
        // }
        // echo $sum;

        // $i=1;
        // while($i<10){
        //     echo $i;
        //     echo "<br/>";
        //     $i++;
        // }
        
        //利用While loop計算1+2+3+….+50總和? 

        // $sum = 0;
        // $i = 1;
        // while($i<=50){
        //     $sum = $sum +$i;
        //     $i++;
        // }
        // echo $sum;  //  印出變數

        

        // $i=1;
        // do{
        //     echo $i;
        //     $i++;
        //     $i++;
        // }while($i<1);

        //九九乘法表為例
        
        // for($i=1; $i<= 9; $i++){
        //     for($s=1; $s <= 9; $s++){
        //        echo $i."x".$s."=".$i*$s. "<br/>";
        //     }
        // }

        //$arr = array(30,60,90);

        // $arr = [60,40,80,69];

        //     for($i=0; $i < 4; $i++){
        //         echo $arr[$i];
        //         echo"<br/>";
        //     }
        
        //讀取索引陣列 - 使用For迴圈
        // $arr = [60,40,80,69,90,77,88];

        // for($i=0; $i < count($arr); $i++){
        //     echo $arr[$i];
        //     echo"<br/>";
        // }
    
        //讀取索引陣列 - 使用Foreach迴圈

        // $arr = [60,40,80,69,90,7667,88];
        // foreach ($arr as $index => $value){
        //     echo $index."/".$value;
        //     echo "<br/>";
        // }
    
        // $arr = ["甲" => 80, "乙" => 93, "丙" => 45];
        
        // foreach ($arr as $index => $value){
        //         echo $index."/".$value;
        //         echo "<br/>";
        // }

        // foreach ($arr as $index => $value){
        //     echo $index. "=" .$value ."<br/>" ;
        // }

        

        // $arr = [60,40,80,69,90,67,88];
        //print_r($arr);
        // 課堂練習

        // 請參考以下步驟將最大值為50的5的倍數封裝到一個陣列內，重新排序，最後透過print_r()顯示結果
        // Step1. 先定義一個空陣列 ex: $arr = [];
        // Step2. 使用For迴圈批次將5的倍數放入陣列內
        // Step3. 使用shuffle()重新排序陣列內容
        // Step4. 透過print_r()顯示結果如下，重新整理頁面，順序會變動 
        // Array ( [0] => 40 [1] => 10 [2] => 25 [3] => 15 [4] => 20 [5] => 30 [6] => 35 [7] => 5 [8] => 50 [9] => 45 )
        // $arr = [];
        // for($i=1; $i<=50; $i++){
        //     if($i % 5 == 0){
        //         array_push($arr, $i);
        //     }
        // }
        // shuffle($arr);
        // print_r($arr);
        
        //取出二微陣列
        // $arr = [ [80, 75], [66,40], [45, 93] ];

        // foreach ($arr as $index => $value){
        //     foreach($value as $index_sub => $value_sub){
        //         echo $value_sub;
        //         echo "<br/>";
        //     }
        // }
        
        // $arr = [ [80, 75],[93,55],[45,92] ];

        //     foreach ($arr as $index => $value){

        //     }
        //     "A同學" => [ "英文" => 80, "數學" => 75], 
        //     "B同學" => [ "英文" => 93, "數學" => 55], 
        //     "C同學" => [ "英文" => 45, "數學" => 92] 
        //     ];
        
        // 請試著算出:
        // 英文最高分?
        // 數學最低分?
        // 英文平均分數?
        // 數學平均分數?

        $en_arr = [];
        $ma_arr = [];

        $arr = [ 
            "A同學" => [ "英文" => 80, "數學" => 75], 
            "B同學" => [ "英文" => 93, "數學" => 55], 
            "C同學" => [ "英文" => 45, "數學" => 92] 
            ];
            //二維陣列

        foreach($arr as $who => $grade){
            // print_r($grade); print_r將陣列內容秀出來
            // echo "<br/>";
            foreach($grade as $subject => $score){   //跑第二次迴圈
                if($subject == "英文"){
                    array_push($en_arr, $score); //科目等於英文時候塞成績進去
                }
                if($subject == "數學"){
                    array_push($ma_arr, $score);
                }
            }
        }

    //    print_r($en_arr);
    //    print_r($ma_arr);
        
       echo "EN max:". max($en_arr);
       echo "<br/>";
       echo "MA min:". min($ma_arr);
       echo "<br/>";
       echo "EN AVG:". round(array_sum($en_arr) / count($en_arr)); //AVG平均值 / sum()所有元素和/ 除以陣列個數 count
       echo "<br/>";
       echo "MA AVG:". array_sum($ma_arr) / count($ma_arr); //數學平均

    ?>   

    




 
 







