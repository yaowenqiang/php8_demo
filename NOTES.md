> docker container run --rm -v $(pwd):/script/ php:7.4 php /script/bubble.php
> docker container run --rm -v $(pwd):/script/ martinpham/php8:fpm-extra-alpine php /script/bubble.php
> docker container run --rm -v $(pwd):/script/ keinos/php8-jit php /script/bubble.php
> docker container run --rm -v $(pwd):/script/ php:5.3 php /script/bubble.php
