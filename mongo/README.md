# MongoDB + PHP 検証環境
意外にも即席で使えそうなものが転がってなかったので作成した

## 使い方
* 起動  
```
$ docker-compose up -d
```

* composer  
php-apache/下のDockerfileにも書いてあるけどcomposerのコマンドが失敗してるぽいので  
起動後コンテナに入って直接打ってあげてくれ
```
$ composer require mongodb/mongodb
```
* 検証コード  
./www/htmlに適当に置いてdocker-composeするといい
別に起動後ファイル作ってもいいけど

## 
