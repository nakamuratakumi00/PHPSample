<?php
$sei = $_GET['sei'];
$mei = $_GET['mei'];
$age = $_GET['age'];
/*echo $sei;
echo $mei;
echo $age;*/

$link = mysqli_connect('localhost', 'root', '', 'test2');


// 接続状況をチェック
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}

echo "データベースの接続に成功しました。\n";

// カラム``には``を、カラム``には``をもつレコードを挿入
$query = "INSERT INTO students (first_name, last_name, age) VALUES ('$sei','$mei','$age');";

// クエリを実行します。
if (mysqli_query($link, $query)) {
    echo "INSERT に成功しました。<br/>";
} else {
    echo "INSERT に失敗しました。<br/>";
}

$result_list = $link->query('SELECT * FROM students');

//studentsのテーブルを表示
foreach ($result_list as $value) {
    print "{$value['first_name']}<br/>";
    print "{$value['last_name']}<br/>";
    print "{$value['age']}<br/>";
}


// 接続を閉じます
mysqli_close($link);
