# phpunitのインストール

```
curl -LO https://phar.phpunit.de/phpunit-6.5.phar
chmod +x phpunit-6.5.phar
mv phpunit-6.5.phar phpunit
./phpunit --version
composer dump-autoload
```

# ユニットテスト

```
./phpunit tests
```