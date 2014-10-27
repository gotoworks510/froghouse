Frog Houseの授業用ファイルです。修正しだいアップします。

### htaccessの設定（パーマリンクの変更後に404エラーが起こった場合）

```
Listen 8003
<VirtualHost *:8003>
    DocumentRoot "/Users/senna/Dropbox/sites/froghouse/htdocs"
    ServerName froghouse
</VirtualHost>
<Directory "/Users/senna/Dropbox/sites/froghouse/htdocs">
        AllowOverride All
        Options -Indexes +FollowSymLinks
        Order allow,deny
        Allow from all
</DirectDory>
```

