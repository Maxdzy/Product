<?php

require_once './vendor/autoload.php';

use App\Models\DB_config;
use App\Repository\ArrayProductRepository;

$mysql = new DB_config();
$arrayObject = new ArrayProductRepository($mysql);

require_once('./view/list.php');

