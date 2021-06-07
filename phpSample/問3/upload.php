<?php

if (is_uploaded_file($_FILES["csvfile"]["tmp_name"])) {
    $file_tmp_name = $_FILES["csvfile"]["tmp_name"];
    $file_name = $_FILES["csvfile"]["name"];
}

$files = fopen($file_name, "r");

/* ファイルを1行ずつ出力 */
if ($files) {
    while ($line = fgetcsv($files)) {
        foreach ($line as $value) {
            echo "$value<br/>";
        }
    }
}

/* ファイルポインタをクローズ */
fclose($files);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>submit</title>
</head>

<body>


</body>

</html>