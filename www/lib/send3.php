<?php
include "./connect_db.php";

$choices = $_POST["choices"];

$sql = "INSERT INTO choices(choices) VALUE (:choices)";
$stmt = connect_db() -> prepare($sql);
$params = array(":choices" => $choices);
$stmt -> execute($params);


// echo "<p>ユーザ名" . $username . "</p>";
// echo "<p>グループID" . $g_num . "</p>";
// echo "<p>コメント" . $comment . "</p>";

header("Location:../setting.php");
exit();
?>