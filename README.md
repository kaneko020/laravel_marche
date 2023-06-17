## udemy Laravel講座

## ダウンロード方法
git clone
git clone https://github.com/kaneko020/laravel_marche.git

git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/kaneko020/laravel_marche.git

もしくはzipファイルでダウンロードしてください


## インストール方法

cd laravel_marche
composer install
npm install
npm run dev

.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONN_ECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_marche
DB_USERNAME=marche
DB_PASSWORD=root

MAMP/XAMPPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。
(データベーステーブルとダミーデータが追加されればOK)

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan serve
で簡易サーバーを立ち上げ、表示確認をしてください。


## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
store1.jpg 〜 store3.jpg として
保存しています。

php artisan storage:link で
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し
画像を保存してください。
