<?php

require_once "../vendor/autoload.php";
require_once "../app/config/bootstrap.php";
require_once '../routes/route.web.php';

use App\Core\Router;
echo "Application déployée sur Render !";

Router::resolve($routes);