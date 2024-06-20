<?php
include "./lib/connect_db.php";

$g_num = $_GET["g_num"];

$sql = "SELECT * FROM personal_work WHERE g_num = $g_num";

$stmt = connect_db() -> query($sql);


include "./inc/header.php";
?>
<body>
    <p><?= htmlspecialchars($g_num)?>班</p>
    <?php foreach($stmt as $key => $value):?>
        <div class="List">
            <p><?= htmlspecialchars($value["username"]); ?></p>
            <p><?= htmlspecialchars($value["g_num"])?>これデバック用</p>
            <p><?= htmlspecialchars($value["comment"])?></p>
        </div>
    <?php endforeach;?>

    <p>代表者が入力して下さい！</p>
    <p><a href="./all.php">代表者以外はこちらから！</a></p>
    <form action="./lib/send2.php" method="post">
        <input type="text" name="g_num" id="g_num" value="<?= $g_num?>" readonly>
        <label for="g_num">班</label>
        <textarea name="g_comment" id=""></textarea>
        <button type="submit">送信</button>
    </form>
</body>
</html>