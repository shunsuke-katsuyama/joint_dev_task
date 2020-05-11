<?php

//1
$names =["tanaka","satou","sasaki","takahashi"];

array_push($names,"saitou");
print_r($names);


//2

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array3 = array_merge($array1,$array2);

print_r($array3);

//3

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

$count = 0;
foreach ($numbers as $number){
    if($number === 3) {
    $count++;
    }
}
print_r($count . '回'.PHP_EOL);

//4
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

array_diff($sports,[null]);
print_r($sports);


//5

$array1 = [];

var_export(empty($array1));

echo PHP_EOL;

$array2 = [1, 5, 8, 10];
var_export(empty($array2));

echo PHP_EOL;

//6
$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];
foreach ($numbers1 as $number) {
    $number *= 10;
    array_push($numbers2,$number);
}

print_r($numbers2);
echo PHP_EOL;

//7
$array = ["1", "2", "3", "4", "5"];
$array = array_map('intval',($array));

print_r($array);
PHP_EOL;

//8

$programming_languages = ["php","ruby","python","javascript"];

$programming_languages = array_map('ucfirst',$programming_languages);

$upper_case_programming_languages = array_map('strtoupper',$programming_languages);

print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names2 = [];
foreach($names as $key => $name) {
    $number = $key + 1;
    $name2 = "会員No." . $number . " " . $name;
    array_push($names2,$name2);
}
print_r($names2);

$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

foreach ($foods as $food) {
    if(preg_match('/うに/', $food)) {
        print('好物です'.PHP_EOL);
    } else {
        print('まぁまぁ好きです'.PHP_EOL);
    }
}

echo PHP_EOL;

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$sports2 = [];
foreach($sports as $key=> $sport){
    if(is_array($sport)){
        $sports2 = array_merge($sports2,$sport);
    }else{
        array_push($sports2,$sport);
    }
}

$sports2 = array_unique($sports2);
$sports2 = array_values($sports2);

$sports3 = [];
foreach($sports2 as $key => $sport) {
    $number = $key + 1;
    $sport3 = "No." .$number. " " .$sport;
    array_push($sports3,$sport3);
}

print_r("ユーザーの趣味一覧".PHP_EOL);
foreach($sports3 as $sport3){
    print($sport3.PHP_EOL);
}

$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

echo PHP_EOL;

print_r($data['user']['name']);

echo PHP_EOL;

$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

$user_data = $update_data + $user_data;

print_r($user_data);

$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

$new_data = [];
foreach($data as $number_data){
    array_push($new_data,$number_data);
}

print_r($new_data);

$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];

if(array_key_exists('age', $data1)) {
    print('OK'.PHP_EOL);
}else{
    print('NG'.PHP_EOL);
}

$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

if(array_key_exists('age',$data2)) {
    print('OK'.PHP_EOL);
}else{
    print('NG'.PHP_EOL);
}

$users = [
    [ "name" => "satou", "age" => 22 ],
    [ "name" => "yamada", "age" => 12 ],
    [ "name" => "takahashi", "age" => 32 ],
    [ "name" => "nakamura", "age" => 41 ]
  ];

foreach($users as $key => $user){
    echo "私の名前は".$user["name"]."です。".$user['age']."歳です。".PHP_EOL;
}

?>
