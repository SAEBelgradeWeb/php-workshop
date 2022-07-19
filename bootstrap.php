<?php
$config = require_once  'config.php';
require_once 'database/Database.php';
require_once 'database/QueryBuilder.php';
require_once "functions.php";


return new QueryBuilder(Database::connect($config['database']));
