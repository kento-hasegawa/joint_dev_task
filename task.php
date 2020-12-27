# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

<?php

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載

array_push($names, "斎藤");
print_r($names);


echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

$array = array_merge($array1, $array2);
print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
$numbers1 = array_count_values($numbers);
foreach($numbers1 as $number => $count) {
    if ($number == '3' ){
    print_r($number."の個数".$count."個");
    echo PHP_EOL;
}
}

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
 $sport1 = array_unique($sports);
foreach($sport1 as $sport) {
  echo $sport . PHP_EOL;
}

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
if (empty($array1) ){
  echo 'true';
  echo PHP_EOL;
} elseif ($array1 > 0){
  echo 'false';
  echo PHP_EOL;
}

echo PHP_EOL;

if (empty($array2) ){
  echo 'true';
  echo PHP_EOL;
} elseif ($array2 > 0){
  echo 'false';
  echo PHP_EOL;
}


echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載
$number2 = [];
foreach ($numbers1 as $number){
  $number *= 10;
  array_push($number2,$number);
}

print_r($number2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];
$array  = array_map('intval',($array));

print_r($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];
# 以下に回答を記載
$programming_languages = array_map('ucfirst',$programming_languages);
$upper_case_programming_languages = array_map('strtoupper',$programming_languages);

echo PHP_EOL;

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

$name1 = [];
 foreach ($names as $name) {
  array_push($name1,'会員NO.'.$count++." ".$name);
}

print_r($name1);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

 foreach ($foods as $key => $food){
  if (preg_match("/うに/",$food)){
    echo $food." ".'好物です';
    echo PHP_EOL;
  } else {
    echo $food." ".'まぁまぁ好きです';
    echo PHP_EOL;
  }
}

echo PHP_EOL;


print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  $sports2 = [];
  foreach($sports as $key => $sport){
      if(is_array($sport)){
          $sports2 = array_merge($sports2,$sport);
      }else{
          array_push($sports2,$sport);
      }
  }

  $sports2 = array_unique($sports2);
  $sports2 = array_values($sports2);

  $sports3 = [];
  foreach($sports2 as $key => $sport){
      $number = $key + 1;
      $sport3 = $sport;
      array_push($sports3,$sport3);
  }

  echo 'ユーザーの趣味一覧';
  echo PHP_EOL;
foreach ($sports3 as $sports4) {
    $lank++;
    echo 'No'.$lank." ".$sports4;
    echo PHP_EOL;
}

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
echo $data["user"]["name"].PHP_EOL;


echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];


$user_data = array_merge($user_data,$update_data);

foreach ($user_data as $key => $user_data1) {
    echo $user_data1.PHP_EOL;
}

  # 以下に回答を記載

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
  $data1 = [];
foreach ($data as $data2){
  array_push($data1,$data2);
}

print_r($data1);

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
  if(array_key_exists("age",$data1)){
      echo "OK".PHP_EOL;
  } else {
      echo "NG".PHP_EOL;
  }

  if(array_key_exists("age",$data2)){
      echo "OK".PHP_EOL;
  } else {
      echo "NG".PHP_EOL;
  }

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
  foreach ($users as $key => $user){
    echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
  }

echo PHP_EOL;
#ここから12/27回答分ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

print("#####q17#####".PHP_EOL);
class User
{
    public $name;
    public $age;
    public $sex;

    public function __construct($user_name,$user_age,$user_sex) {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->sex = $user_sex;
    }

    public function info(){
      echo "名前:".$this->name.PHP_EOL;
      echo "年齢:".$this->age.PHP_EOL;
      echo "性別:".$this->sex.PHP_EOL;
    }
}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

class Man
{

  public $name;
  public $age;

  public function __construct($man_name, $man_age){
      $this->name = $man_name;
      $this->age = $man_age;
  }

  public function introduce(){
    if ($this->age > 31){
        echo "こんにちは,".$this->name."と申します。宜しくお願いいたします。".PHP_EOL;
    } else {
      echo "はいさいまいど〜,".$this->name."です!!!".PHP_EOL;
    }
  }
}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{

  public $name;

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

  public $name;
  public $age;

  public function __construct($human_name,$human_age){
      $this->name = $human_name;
      $this->age = $human_age;
  }
}

class Zoo
{

  public $zoo_name;
  public $entry_fee;


  public function __construct($zoo_name, $entry_fee){
      $this->zoo_name = $zoo_name;
      $this->entry_fee = $entry_fee;
  }

  public function info_entry_fee($human) {
    if($human->age >= 0 && $human->age <=5){
      echo $human->name."さんの入場料は ".$this->entry_fee["infant"]." 円です。".PHP_EOL;
    } elseif ($human->age >= 6 && $human->age <= 12){
      echo $human->name."さんの入場料は ".$this->entry_fee["children"]." 円です。".PHP_EOL;
    } elseif ($human->age >= 13 && $human->age <= 64){
      echo $human->name."さんの入場料は ".$this->entry_fee["adult"]." 円です。".PHP_EOL;
    } elseif ($human->age >= 65 && $human->age <= 120){
      echo $human->name."さんの入場料は ".$this->entry_fee["senior"]." 円です。".PHP_EOL;
    }
}
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

print("#####q21#####".PHP_EOL);

for($i=1 ; $i <= 30 ; $i++) {
  if($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0){
    echo "FizzBuzzHoge".PHP_EOL;
  }elseif($i % 3 == 0 && $i % 5 == 0){
    echo "FizzBuzz".PHP_EOL;
  }elseif($i % 3 == 0 && $i % 7 == 0){
    echo "FizzHoge".PHP_EOL;
  }elseif($i % 5 == 0 && $i % 7 == 0){
    echo "BuzzHoge".PHP_EOL;
  }elseif($i % 7 == 0 ){
    echo "Hoge".PHP_EOL;
  }elseif($i % 5 == 0 ){
    echo "Buzz".PHP_EOL;
  }elseif($i % 3 == 0 ){
    echo "Fizz".PHP_EOL;
  }else {
    echo $i.PHP_EOL;
  }
}

echo PHP_EOL;
