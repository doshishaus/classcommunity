<?php
include "./lib/connect_db.php";

$sql = "SELECT * FROM choices";

$stmt = connect_db()->query($sql);

include "./inc/header.php";
?>

<body>
    <form action="./lib/send.php" method="post">
        <input type="text" id="username" name="username">
        <?php foreach ($stmt as $key => $value) : ?>
            <input type="radio" name="choices" value="<?= htmlspecialchars($value["choices"]);?>">選択肢<?= htmlspecialchars($value["id"]); ?>：<?= htmlspecialchars($value["choices"]); ?></input>
        <?php endforeach; ?>

        <fieldset require>
            <input type="radio" value="1" name="g_num">1班</input>
            <input type="radio" value="2" name="g_num">2班</input>
            <input type="radio" value="3" name="g_num">3班</input>
            <input type="radio" value="4" name="g_num">4班</input>
            <input type="radio" value="5" name="g_num">5班</input>
            <input type="radio" value="6" name="g_num">6班</input>
            <input type="radio" value="7" name="g_num">7班</input>
        </fieldset>
        <textarea type="text" require placeholder="意見を入力" name="comment" id="comment"></textarea>
        <button type="submit">投稿</button>
    </form>
</body>

</html>