<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>サンプルページ</title>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        CSVファイル：<br />
        <input type="file" name="csvfile" size="30" /><br />
        <input type="submit" value="アップロード" />
    </form>

</body>

</html>