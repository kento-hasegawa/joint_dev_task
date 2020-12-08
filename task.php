# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

<?php

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
//array_pushにて（変数, 値）にて配列に値を追加する。
array_push($names, "斎藤");
//$namesを出力
print_r($names);


echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
  //新しい変数＝array_merge(もとの変数１，変数２)とする
  $array = array_merge($array1, $array2);
  print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
  //array_count_valuesで重複している値をカウント
  $numbers1 = array_count_values($numbers);
  // 連想配列のキーと値を出力
  //print_r($numbers1);
  //foreachで連想配列を出力してそれぞれの個数を出力
foreach($numbers1 as $number => $count) {
    if ($number == '3' ){
    print_r($number."の個数".$count."個");
}
}

/* if ($number == ['3']){
    echo $count."回";
  }
 */

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
  //array_uniqueで重複の値を削除
$sport1 = array_unique($sports);
//foreachで配列を出力
foreach($sport1 as $sport) {
  echo $sport . PHP_EOL;
}

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
  //emptyで値が空かどうか確認する
  if (empty($array1) ){
    echo 'true';
  } elseif ($array1 > 0){
    echo 'false';
  }

  echo PHP_EOL;

  //emptyで値が空かどうか確認する
if (empty($array2) ){
  echo 'true';
} elseif ($array2 > 0){
  echo 'false';
}


echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載
//$number2の空配列をつくる。
$number2 = [];
//foreachで$number1の値を繰り返し出力する
foreach ($numbers1 as $number){
  //$numberを１０倍する
  $number *= 10;
  //array_pushで$number2の配列に$numberの値を加える
  array_push($number2,$number);
}
//number2を出力
print_r($number2);

//値から配列とを作成

/* function multiple_number($numbers1) {
  return $numbers1*10;
}

$numbers1 = [1, 2, 3, 4, 5];

$multiple_numbers = array_map('multiple_number',$numbers1);
var_dump($multiple_numbers); */
//echo $multiple_numbers;

  echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];
$array  = array_map('intval',($array));
  # 以下に回答を記載
  //文字列用の配列を作成
  //$array2 = [];
//foreach ($array as $arrays) {
  //$num = intval($array);
//  array_push($array2,$num);
//}

print_r($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
$upper_case_programming_languages = [];

  //foreach ($programming_languages as $programming_language){
    //echo strtoupper($programming_language);
  //}

  echo PHP_EOL;

//$upper_case_programming_languages = mb_strtoupper($programming_languages);
  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  //$name1の配列を作成
  $name1 = [];
  //foreachで回す
  foreach ($names as $name) {

  }

  print_r($name1);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{  # コードを追加

}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
