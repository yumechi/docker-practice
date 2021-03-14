FROM php:8.0-fpm-buster

# composer はマルチステージビルドで持ってくる
# refer: https://qiita.com/yatsbashy/items/02bbbebbfe7e5a5976bc
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# composer need git
RUN apt-get update && apt-get install -y git

RUN composer require guzzlehttp/guzzle:^7.0
COPY . .
RUN chmod u+x entrypoint.sh

ENTRYPOINT ["/var/www/html/entrypoint.sh"]
# RUN ["php", "main.php"]
