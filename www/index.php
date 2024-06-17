<?php
include "lib/connect_db.php";

try {
    $pdo = connect_db();

    $sql_file_path = __DIR__ . '/initdb.d/create-table.sql';
    if (file_exists($sql_file_path)) {
        $sql = file_get_contents($sql_file_path);

        // SQLを実行
        $pdo->exec($sql);

        echo "テーブルが正常に作成されました";
    } else {
        echo "SQLファイルが見つかりません: " . $sql_file_path;
    }
} catch (PDOException $e) {
    echo "テーブル作成がなんかおかしいよ";
}


?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classcommunity</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <h1>馬渕栄二郎</h1>
    </header>
    <main>
        <p>テスト</p>
    </main>
    <footer>

    </footer>
</body>

</html>