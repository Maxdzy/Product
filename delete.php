<?php

require_once './vendor/autoload.php';

use App\Models\DB_config;
use App\Repository\ActionProductRepository;

if (isset($_POST['delete_product'])) {

    $data = $_POST['delete_product'];
    $arrayProductId = [];
    foreach ($data as $id => $value) {
        array_push($arrayProductId, $id);
    }
    $mysql = new DB_config();
    $action = new ActionProductRepository($mysql);
    $action->delete($arrayProductId);

}

header("Location: index.php", TRUE, 301);




