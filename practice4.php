<?php
//課題4..次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

$arr =[8,10,7,9];
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number > $a){
            $max_number = $a;
        }
    }      
    return  $max_number;
}
echo max_array($arr);
?>