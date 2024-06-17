-- -- user_234201でログインする場合は、その前にrootでログインして権限を割り当てる必要がある
-- ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
-- 文字化け表示のために必要
SET CHARACTER SET utf8mb4;

-- 個人入力フォームのテーブル
CREATE TABLE personalwork (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    groupid VARCHAR(50) NOT NULL,
    comment VARCHAR(255) NOT NULL
);