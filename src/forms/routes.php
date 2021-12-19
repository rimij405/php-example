<?php

$router->get('forms', 'controllers/index.php');

$router->get('forms/about', 'controllers/about.php');

$router->get('forms/about/culture', 'controllers/about-culture.php');

$router->get('forms/contact', 'controllers/contact.php');

$router->post('forms/names', 'controllers/add-name.php');