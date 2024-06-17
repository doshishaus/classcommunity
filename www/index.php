<?php
include "lib/connect_db.php";

try {
    $pdo = connect_db();
} catch (\Throwable $th) {
    //throw $th;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classcommunity</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <h1>馬渕栄二郎</h1>
    </header>
    <main>
        <p>テスト</p>
    </main>
    <footer>

    </footer>
</body>

</html>