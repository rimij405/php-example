<?php

require 'core/bootstrap.php';

$router = Router::load('routes.php');

require $router->redirect(Request::uri(), Request::method());