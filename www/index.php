<?php
// include "lib/connect_db.php";
// $sql = "CREATE TABLE personalwork (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     groupid VARCHAR(50) NOT NULL,
//     comment VARCHAR(255) NOT NULL
//     );"

// try {
//     $pdo = connect_db();

    
// } catch (PDOException $e) {
//     echo "テーブル作成がなんかおかしいよ";
// }

include "./inc/header.php";
?>




<body>
    <header>
        <h1>馬渕栄二郎</h1>
    </header>
    <main>
        <div>
            <p><a href="form.php">フォーム</a></p>
            <p><a href="group.php">グループ</a></p>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>