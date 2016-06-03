FROM tutum/apache-php:latest
MAINTAINER Rob Edwards

ADD index.php /app/index.php
ADD logo.png /app/logo.png

EXPOSE 80
WORKDIR /app
CMD ["/run.sh"]
