<?php

require_once './vendor/autoload.php';

use App\Models\DB_config;
use App\Repository\ActionProductRepository;

if (isset($_POST)) {

    $data = $_POST;
    $mysql = new DB_config();
    $action = new ActionProductRepository($mysql);
    $action->add($data);

    header("Location: index.php", TRUE, 301);

}
