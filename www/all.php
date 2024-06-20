<?php
include "./lib/connect_db.php";

$sql = "SELECT * FROM team_work";
$stmt = connect_db() -> query($sql);

$sql1 = "SELECT * FROM personal_work";
$stmt1 = connect_db() -> query($sql1);

$all_comment = $stmt1 -> fetchAll(PDO::FETCH_ASSOC);


include "./inc/header.php";
?>

<body>
    <?php foreach($stmt as $key => $value):?>
        <details>
            <summary><?= htmlspecialchars($value["g_comment"])?></summary>
            <div>
                <?php foreach($all_comment as $comment):?>
                    <?php if($value["g_num"] == $comment["g_num"]):?>
                    <p><?= htmlspecialchars($comment["comment"]) ?></p>
                    <?php endif;?>
                <?php endforeach;?>
            </div>
        </details>
    <?php endforeach;?>
</body>