<?php

include '../lib/Fish/config.class.php';
include '../config/myConfig.class.php';
include '../config/config.php';
include '../lib/Fish/dispatcher.class.php';

use Fish\myConfig\myConfig as config;
use Fish\dispatcher\dispatcher;

session_name(config::getCookieNameSession());
session_start();

dispatcher::main();