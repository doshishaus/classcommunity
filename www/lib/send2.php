<?php
include "./connect_db.php";

$g_num = $_POST["g_num"];
$g_comment = $_POST["g_comment"];

$sql = "INSERT INTO team_work(g_num,g_comment) VALUE (:g_num,:g_comment)";
$stmt = connect_db() -> prepare($sql);
$params = array(":g_num" => $g_num,":g_comment" => $g_comment);
$stmt -> execute($params);


// echo "<p>ユーザ名" . $username . "</p>";
// echo "<p>グループID" . $g_num . "</p>";
// echo "<p>コメント" . $comment . "</p>";

header("Location:../wait.php");
exit();
?>