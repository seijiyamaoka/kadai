<?php
//12 PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろうの課題

//課題1
$name = "yamaoka";

if ($name == "yamaoka") {
    echo "私はあなたの名前です";
} else {
    echo "あなたの名前ではありません";
}

//課題2
$sum = 0;

for ($i = 1; $i <= 10000; $i++ ) {
    $sum += $i;
}

echo $sum;

//課題3
$fruits = ["りんご","みかん","キウイ","パイナップル","ぶどう"];

foreach ($fruits as $fruit) {
    echo $fruit;
}

//課題4
/* for文の始めの値を定義する */
$start = 1;

/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}