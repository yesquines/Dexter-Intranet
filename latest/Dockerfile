FROM alpine
MAINTAINER Yago Ésquines

WORKDIR /var/www/localhost/htdocs/
RUN apk --no-cache add apache2 php7-apache2 php7 php-session && rm index.html \
    && ln -sf /dev/stdout /var/log/apache2/access.log && ln -sf /dev/stderr /var/log/apache2/error.log

COPY intranet/ .

EXPOSE 80
ENTRYPOINT ["httpd","-D","FOREGROUND"]
