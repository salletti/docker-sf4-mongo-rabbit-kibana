docker-sf4-mongo-rabbit-kibana
==============

This is a fork of project: https://github.com/eko/docker-symfony

This is a complete stack for running Symfony 4 (latest version: Flex) into Docker containers using docker-compose tool.

# Installation

First, clone the repository: 

```bash
$ git clone https://github.com/salletti/docker-sf4-mongo-rabbit-kibana.git
```

```bash
$ docker-compose build
```
Here are the docker-compose built images:

* db: This is the MySQL database container (can be changed to postgresql or whatever in docker-compose.yml file),
* php: This is the PHP-FPM container including the application volume mounted on,
* nginx: This is the Nginx webserver container in which php volumes are mounted too,
* elk: This is a ELK stack container which uses Logstash to collect logs, send them into Elasticsearch and visualize them with Kibana.
* mongodb: This is the mongoDB container 
* queue: This is the rabbitMQ container (access: http://localhost:15672/#/)
* elasticsearch: This is the Elasticsearch container 


```bash
$ docker-compose exec php sh
# composer self-update
# composer install
```
Go to: http://sf.localtest.me/post/list

