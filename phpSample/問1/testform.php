<?php

//$moji1 = $_GET['text1'];
$moji1 = $_POST['text1'];

function escape1($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>submit</title>
</head>

<body>

    <p><?= escape1($moji1) ?>が入力されました。</p>

</body>

</html>