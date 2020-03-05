DEXTER - INTRANET
=================

Objetivo
--------
Aplicação simples em PHP para utilização na criação de containers com Docker ou Kubernetes

Especificações do Container
---------------------------
* **Imagem Base**: Alpine
* **Diretório de Trabalho**: /var/www/localhost/htdocs/
* **Pacotes Adicionais**: apache2, php7-apache2, php7, php-session
* **Entrypoint**: httpd -D FOREGROUND

Docker Hub
----------
* [`Docker Hub - Dexter Intranet`](https://hub.docker.com/r/yagoesquines/dexter-intranet)

### Como Usar:
* Start Container
  ```bash
  docker container run -d --name dexter-intranet -p 80:80 yagoesquines/dexter-intranet
  ```
* Container Shell
  ```bash
  docker exec -ti dexter-intranet sh
  ```

Créditos:
---------
Aplicação desenvolvida pela [4Linux](https://4linux.com.br)
