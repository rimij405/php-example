<?php

$config = require 'config.php';

require 'Connection.php';

require 'QueryBuilder.php';

$pdo = Connection::make($config['database']);

return new QueryBuilder($pdo);