docker-symfony
==============

This is a fork of project: https://github.com/eko/docker-symfony

This is a complete stack for running Symfony 4 (latest version: Flex) into Docker containers using docker-compose tool.

# Installation

First, clone this repository:

Here are the docker-compose built images:

* db: This is the MySQL database container (can be changed to postgresql or whatever in docker-compose.yml file),
* php: This is the PHP-FPM container including the application volume mounted on,
* nginx: This is the Nginx webserver container in which php volumes are mounted too,
* elk: This is a ELK stack container which uses Logstash to collect logs, send them into Elasticsearch and visualize them with Kibana.
* mongodb: This is the mongoDB container 
* queue: This is the rabbitMQ container (access: http://localhost:15672/#/)


```bash
$ git clone https://github.com/salletti/docker-sf4-mongo-rabbit-kibana.git
```

