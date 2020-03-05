FROM alpine
MAINTAINER Yago Ésquines

WORKDIR /var/www/localhost/htdocs/
RUN apk --no-cache add apache2 php7-apache2 php7 php-session && rm index.html

COPY intranet/ .

EXPOSE 80
ENTRYPOINT ["httpd","-D","FOREGROUND"]
