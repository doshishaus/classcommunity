
-- 文字化け表示のために必要
SET CHARACTER SET utf8mb4;

-- 個人入力フォームのテーブル
CREATE TABLE personalwork (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    groupid VARCHAR(50) NOT NULL,
    comment VARCHAR(255) NOT NULL
);