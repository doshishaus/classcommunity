# 環境構築
フロント
　HMTL,SCSS,JavaScript
バック
　php,Mysql
インフラ
　Docker

## 概要
グループワーク促進ツール

## 環境構築

`.env`ファイルに以下を記述

```env
PHP_PORT=8080
MYSQL_DATABASE=classcommunity
MYSQL_PORT=3307
ADMIN_PORT=8081
MYSQL_USER=root
MYSQL_PASSWORD=password
MYSQL_HOST=db
```

ターミナルを起動して以下を実行（初回は「`--build`もつける」）

```bash
docker compose up -d --build
```

`http://localhost:9090`でWebサーバーにアクセス

`http://localhost:3307`でphpMyAdminにアクセス


- サーバー：`db`
- ユーザー名：`root`
- パスワード：`password`

でログインできる。

起動直後はログインできないので、少し待つ。

コンテナを終了する際は以下を実行

```bash
docker compose down
```

## ディレクトリの説明

- `/config`
  - PHP・Apache・MySQLの設定ファイルを保存するフォルダ
  - 基本触らない

- `/www`
  - PHP・HTMLなどアプリのプログラムを保存するフォルダ
  - 機能や画面ごとにフォルダ分けしていく
  - 主なフォルダ
    - `/css`
      - CSSファイルを保存する
    - `/js`
      - JSファイルを保存する
    - `/lib`
      - フォームの送信先の処理をするPHPを保存する
  - 管理者はsetup.phpを最初に立ち上げることでテーブル作成