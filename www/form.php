<?php


include "./inc/header.php";
?>

<body>
    <form action="./lib/send.php" method="post">
        <input type="text" id="username" name="username">
        <select name="g_num" id="g_num" require>
            <option value="1">1班</option>
            <option value="2">2班</option>
            <option value="3">3班</option>
            <option value="4">4班</option>
            <option value="5">5班</option>
            <option value="6">6班</option>
            <option value="7">7班</option>
        </select>
        <textarea type="text" require placeholder="意見を入力" name="comment" id="comment"></textarea>
        <button type="submit">投稿</button>
    </form>
</body>

</html>