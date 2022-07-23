<?php

$app = [];

$app['config'] = require_once  'config.php';
require_once 'core/Router.php';
require_once 'core/Request.php';
require_once 'core/database/Database.php';
require_once 'core/database/QueryBuilder.php';
require_once "core/functions.php";


$app['database'] = new QueryBuilder(Database::connect($app['config']['database']));
