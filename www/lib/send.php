<?php
include "./connect_db.php";

$username = $_POST["username"];
$choices = $_POST["choices"];
$g_num = $_POST["g_num"];
$comment = $_POST["comment"];

$sql = "INSERT INTO personal_work(username,choices,g_num,comment) VALUE (:username,:choices,:g_num,:comment)";
$stmt = connect_db() -> prepare($sql);
$params = array(":username" => $username,":choices" => $choices,":g_num" => $g_num,":comment" => $comment);
$stmt -> execute($params);

// echo "<p>ユーザ名" . $username . "</p>";
// echo "<p>グループID" . $g_num . "</p>";
// echo "<p>コメント" . $comment . "</p>";

header("Location:../group.php?g_num=".$g_num);
exit();
?>