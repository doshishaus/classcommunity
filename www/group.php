<?php
include "./lib/connect_db.php";

$g_num = $_GET["g_num"];

$sql = "SELECT * FROM personal_work WHERE g_num = :g_num";
$stmt = connect_db()->prepare($sql);
$stmt->execute(['g_num' => $g_num]);

$array = ["A", "B", "C", "D", "E", "F", "G", "H"];
$counter = 1;

include "./inc/header.php";
?>
<link rel="stylesheet" href="./style/group.css">
</head>

<body>
    <div class="container">
        <div class="title-header">
            <h1 class="gnum-center"><?= htmlspecialchars($array[$g_num - 1]); ?>班</h1>
            <p class="title-header-p">破壊に対する批評文についてみんなで話し合ってみよう</p>
        </div>
        <div class="group-list-container">
            <?php foreach ($stmt as $key => $value) : ?>
                <div class="group-list" id="border-<?= htmlspecialchars($counter) ?>">
                    <p><?= htmlspecialchars($value["username"]); ?></p>
                    <p id="comment-<?= htmlspecialchars($counter) ?>"><?= htmlspecialchars($value["comment"]) ?></p>
                </div>
            <?php $counter++;
            endforeach; ?>
        </div>

        <div class="center">
            <p class="form-title">代表者が入力して下さい！　<a href="./all.php" class="link">代表者以外はこちらをクリック！</a></p>
            <form action="./lib/send2.php" method="post">
                <input type="text" name="g_num" id="g_num" value="<?= $g_num ?>" readonly class="none">
                <textarea name="g_comment" id="" class="comment-textarea" placeholder="班の意見を入力"></textarea>
                <button type="submit" class="form-button">送信</button>
            </form>
        </div>
    </div>

    <script>
        function convertNewlinesToBreaks(text) {
            return text.replace(/\n/g, '<br>');
        }

        // PHPのカウンタ変数の最大値を取得
        const maxCounter = <?= $counter - 1 ?>;

        // 各コメント要素に対して改行変換を適用
        for (let i = 1; i <= maxCounter; i++) {
            const element = document.getElementById('comment-' + i);
            if (element) {
                const originalText = element.innerHTML;
                const formattedText = convertNewlinesToBreaks(originalText);
                element.innerHTML = formattedText;
            }
        }
    </script>
</body>

</html>