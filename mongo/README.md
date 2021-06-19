# MongoDB + PHP 検証環境
意外にも即席で使えそうなものが転がってなかったので作成した

## 使い方
* 起動
```
$ docker-compose up -d
```

* composerでのinstall  
php-apacheのDockerfileにコマンド書いたんだが、失敗してるっぽい？
起動後直接叩いてあげて
```
$ composer reqruire mongodb/mongodb
```

* 検証コード  
./www/htmlに適当に置いてdocker-composeするといい
別に起動後ファイル作ってもいいけど

## 
