DEXTER - INTRANET
=================

Objetivo
--------

Aplicação simples em PHP para utilização na criação de containers com Docker ou Kubernetes

Especificações do Container
---------------------------

* Tag: **latest**
	- **Imagem Base**: Alpine
	- **Diretório de Trabalho**: /var/www/localhost/htdocs/
	- **Pacotes Adicionais**: apache2, php7-apache2, php7, php-session
	- **Entrypoint**: httpd -D FOREGROUND

* Tag: **modsec**
	- **Imagem Base**: Alpine
	- **Diretório de Trabalho**: /var/www/localhost/htdocs/
	- **Pacotes Adicionais**: apache2, php7-apache2, php7, php-session, lmdb-dev, curl-dev, libmaxminddb-dev, yajl, libstdc++
  - **Intergrações**: ModSecurity e OWASP ModSecurity Core Rule Set (Implementado com Multi-Stage Builds)
	- **Entrypoint**: httpd -D FOREGROUND

> Para implementar novas regras do ModSecurity é necessário editar o arquivo `/etc/modsecurity.d/modsecurity.conf` dentro do container

Docker Hub
----------

* [`Docker Hub - Dexter Intranet`](https://hub.docker.com/r/yagoesquines/dexter-intranet)

### Como Usar:

* Start Container
  ```bash
  docker container run -d --name dexter-intranet -p 80:80 yagoesquines/dexter-intranet
  ```
  ou
  ```bash
  docker container run -d --name dexter-intranet -p 80:80 yagoesquines/dexter-intranet:modsec
  ```
* Container Shell
  ```bash
  docker exec -ti dexter-intranet sh
  ```

Créditos:
---------

* Aplicação desenvolvida pela [4Linux](https://4linux.com.br)
* Implantação do ModSecurity foi um adaptação para o Apache do projeto [andrewnk/docker-alpine-nginx-modsec](https://github.com/andrewnk/docker-alpine-nginx-modsec)
