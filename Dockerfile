# from https://forums.docker.com/t/running-php-built-in-server/21832/2 

FROM php

ENV APP_DIR /app
ENV APPLICATION_ENV development

WORKDIR $APP_DIR
VOLUME $APP_DIR

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app/public"]