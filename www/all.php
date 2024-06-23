<?php
include "./lib/connect_db.php";

$sql = "SELECT * FROM team_work";
$stmt = connect_db()->query($sql);
$all_stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
usort($all_stmt, function ($a, $b) {
    return $a['g_num'] <=> $b['g_num'];
});


$sql1 = "SELECT * FROM personal_work";
$stmt1 = connect_db()->query($sql1);

$all_comment = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$array = ["A", "B", "C", "D", "E", "F", "G", "H"];

include "./inc/header.php";
?>
<link rel="stylesheet" href="./style/all.css">
</head>

<body>
    <div class="container">
        <div class="title-header">
            <h1>全体の意見</h1>
            <p class="title-header-p">議論のテーマはまぶちが設定して</p>
        </div>
        <?php foreach ($all_stmt as $key => $value) : ?>
            <details class="accordion-list">
                <summary><?= htmlspecialchars($array[$value["g_num"] - 1]) ?>班　<?= htmlspecialchars($value["g_comment"]) ?></summary>
                <div>
                    <?php foreach ($all_comment as $comment) : ?>
                        <?php if ($value["g_num"] == $comment["g_num"]) : ?>
                            <p><?= htmlspecialchars($comment["username"]) ?>：<?= htmlspecialchars($comment["comment"]) ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </details>
        <?php endforeach; ?>
    </div>
</body>

</html>