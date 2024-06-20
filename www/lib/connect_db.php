<?php
function connect_db(){
    $host = getenv("MYSQL_HOST");
    $dbname = getenv("MYSQL_DATABASE");
    $username = getenv("MYSQL_USER");
    $password = getenv("MYSQL_PASSWORD");
    try{
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn,$username,$password,$options);
        // echo "データベースに接続しました";

        return $pdo;
    }catch(PDOException $e){
        die("データベース接続エラー：" .$e -> getMessage());
    }
}


?>
