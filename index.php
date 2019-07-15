<?php

require_once './vendor/autoload.php';

use App\Models\DB_config;
use App\Models\Product;
use App\Options\Size;
use App\Options\Dimension;
use App\Options\Weight;

$mysql = new DB_config();

$option = new Dimension(101, 100, 33);
$option2 = new Size(102);
$option3 = new Size(103);
$option4 = new Weight(55);

$options = compact('option', 'option2', 'option3', 'option4');

$product = new Product($mysql->pdo, $options);

/*foreach ($product->option as $key => $option) {
	$option->render();
}*/

require_once('./view/list.php');

