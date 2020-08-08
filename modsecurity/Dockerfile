FROM httpd:alpine as build_modsecurity

WORKDIR /opt

# Instalação de Dependencias para realizar o Build do ModSecurity
RUN apk add --no-cache --virtual general-dependencies \
        gcc make libc-dev g++ openssl-dev linux-headers pcre-dev \
        zlib-dev git libtool automake autoconf lmdb-dev libxml2-dev \
        curl-dev byacc flex yajl-dev libstdc++ libmaxminddb-dev apr-util-dev

# Compilação do ModSecurity
RUN git clone -b v3/master --depth 1 https://github.com/SpiderLabs/ModSecurity && \
    git -C /opt/ModSecurity submodule update --init --recursive && \
    (cd "/opt/ModSecurity" && ./build.sh && ./configure --with-lmdb && \
        make &&  make install ) && \
    rm -rf /opt/ModSecurity /usr/local/modsecurity/lib/libmodsecurity.a /usr/local/modsecurity/lib/libmodsecurity.la

# Compilação do ModSecurity-Apache Connector
RUN git clone -b master --depth 1 https://github.com/SpiderLabs/ModSecurity-apache.git && \
    git clone -b v3.3/master --depth 1 https://github.com/coreruleset/coreruleset /usr/local/owasp-modsecurity-crs && \
    (cd "/opt/ModSecurity-apache" && ./autogen.sh && ./configure --with-libmodsecurity=/usr/local/modsecurity/ && \
            make && make install ) && \
    mv /usr/local/owasp-modsecurity-crs/crs-setup.conf.example /usr/local/owasp-modsecurity-crs/crs-setup.conf

FROM alpine
MAINTAINER Yago Ésquines

WORKDIR /var/www/localhost/htdocs/
RUN apk --no-cache add apache2 php7-apache2 php7 php-session lmdb-dev curl-dev libmaxminddb-dev yajl libstdc++ && \
    rm index.html && mkdir -p /etc/modsecurity.d/ && \
    sed -ri \
    		-e 's!^(\s*CustomLog)\s+\S+!\1 /proc/self/fd/1!g' \
    		-e 's!^(\s*ErrorLog)\s+\S+!\1 /proc/self/fd/2!g' \
    		-e 's!^(\s*TransferLog)\s+\S+!\1 /proc/self/fd/1!g' \
    		"/etc/apache2/httpd.conf"; 

COPY intranet/ .

# Configuração do ModSecurity no Container da Aplicação
COPY --from=build_modsecurity /usr/local/modsecurity/lib/* /lib/
COPY --from=build_modsecurity /usr/local/owasp-modsecurity-crs /usr/local/owasp-modsecurity-crs
COPY --from=build_modsecurity /usr/local/apache2/modules/mod_security3.so /usr/lib/apache2/

# Configuração do Modulo e Regras do ModSecurity no Apache
COPY confs/security.conf /etc/apache2/conf.d/ 
COPY confs/modsecurity.d/ /etc/modsecurity.d/

EXPOSE 80

ENTRYPOINT ["httpd","-D","FOREGROUND"]
