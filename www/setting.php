<?php
include "./lib/connect_db.php";

$sql = "SELECT * FROM choices";

$stmt = connect_db()->query($sql);


include "./inc/header.php";
?>

<body>
    <p>現在のデータ</p>
    <?php foreach($stmt as $key => $value):?>
        <p>選択肢<?= htmlspecialchars($value["id"]);?>：<?= htmlspecialchars($value["choices"]);?></p>
    <?php endforeach;?>
    <form action="./lib/send3.php" method="post">
        <input type="text" name="choices">
        <button type="submit">送信</button>
    </form>
    <p><a href="./index.php">完了</a></p>
</body>