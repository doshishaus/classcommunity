<?php
include "lib/connect_db.php";


try {
    $stmt = connect_db();

    $sql = "CREATE TABLE personal_work (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        choices VARCHAR(50) NOT NULL,
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

    $sql2 = "CREATE TABLE  choices(
        id INT AUTO_INCREMENT PRIMARY KEY,
        choices VARCHAR(255) NOT NULL
        );";

    $stmt -> exec($sql2);

    echo "接続はうまくいきました。";
    echo '<a href="./setting.php">4択作成画面</<a>';
} catch (PDOException $e) {
    echo "テーブル作成がなんかおかしいよ";
}
?>