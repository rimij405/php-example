<?php

$app = [];

$app['config'] = require __DIR__.'/../config.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

$pdo = Connection::make($app['config']['database']);

$app['database'] = new QueryBuilder($pdo);

return $app;