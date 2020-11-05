<?php
//PHP/Laravel 04 関数を理解しようの課題

//課題1
//数値を2倍にして返す関数
function double($number){
    
    // $result は結果を保存する変数
    $result = ($number * 2);
    
    return $result;
}

// 関数を実行する
echo double(10);

echo "\n";

//課題2
//aとbを足した値を返す関数
function addab($a, $b){
    
    // $result は結果を保存する変数
    $result = ($a + $b);
    
    return $result;
}

// 関数を実行する
echo addab(2,4);

echo "\n";

//課題3
//配列の数字を掛け合わせる
function multiplication($arr){
    
    // $result は結果を保存する変数
    $result = 0;
    
    foreach ($arr as $ar) {
        $result += $ar;
    }
    
    return $result;
}

$array = [1,3,5,7,9];

echo multiplication($array);

echo "\n";

//課題4
//配列の中で1番大きい値を返す
function max_array($arrr){
    
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arrr[0];

foreach($arrr as $a){
    
    if($max_number < $a) {
        $max_number = $a;
    }
    
}

return $max_number;
}

echo max_array($array);

echo "\n";

//課題5
/*  以下の関数を使ってみる
strip_tags
array_push　
array_merge
time, mktime
date
*/

//strip_tags 指定した文字列からHTMLタグを取り除く
$str = "<h1>見出し1</h1>";

echo strip_tags($str);

echo "\n";

//array_push １つ以上の要素を配列の最後に追加する
$arraysample = ["php","ruby","python"];

array_push($arraysample,"swift","c++");

foreach($arraysample as $value) {
    echo $value;
    echo "\n";
}

//array_merge 配列を結合する
$array1 = ["apple","lemon","orange"];
$array2 = ["melon","banana"];

$arrayfruits = array_merge($array1,$array2);

foreach($arrayfruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//time 現在時刻を返す mktime 指定した時刻を返す date 日付、時刻を書式化する

//現在の年月日を表示
echo date("Y/m/d", time());

echo "\n";

//2020年元旦の年月日を表示
echo date("Y年m月j日",mktime(0,0,0,1,1,2020));

echo "\n";

?>