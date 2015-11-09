o<?php

use Fish\myConfig\myConfig as config;

config::setPath('/C:/xampp/htdocs/myAzucar/');
config::setUrl('http://localhost/Fish/web');

config::setDriver('pgsql');
config::setHost('localhost');
config::setPort('5433');
config::setDbUser('.....');
config::setDbPassword('1234');
config::setDbName('.....');
config::setPersistentConnection(true);

config::setDSN(config::getDriver() . ':host=' . config::getHost() . ';port=' . config::getPort() . ';dbname=' . config::getDbName());

config::setCookieNameSession('.....');

config::setDefaultModule('default');
config::setDefaultAction('index');