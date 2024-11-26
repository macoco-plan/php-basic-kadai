<?php
 // 連想配列に値を代入する
$data_array = [
   '名前' => '玉ねぎ',
   '値段' => 200,
   '産地' => '北海道'
];


 // foreach文とecho文を使ってキーと値を出力
foreach ($data_array as $key =>$value) {
   echo "{$key} : {$value} <br>"; //コロンで区切って改行
}

?>

