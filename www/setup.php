<?php
include "lib/connect_db.php";


try {
    $stmt = connect_db();

    $sql = "CREATE TABLE personal_work (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        g_num VARCHAR(50) NOT NULL,
        comment VARCHAR(255) NOT NULL
        );";
    
    $stmt -> exec(($sql));

    $sql1 = "CREATE TABLE  team_work(
        id INT AUTO_INCREMENT PRIMARY KEY,
        g_num VARCHAR(50) NOT NULL,
        g_comment VARCHAR(255) NOT NULL
        );";

    $stmt -> exec($sql1);
    echo "接続はうまくいきました。";
    echo '<a href="./index.php">トップページ</<a>';
} catch (PDOException $e) {
    echo "テーブル作成がなんかおかしいよ";
}
?>