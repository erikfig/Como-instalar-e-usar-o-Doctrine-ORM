<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

date_default_timezone_set('America/Sao_paulo');

$isDevMode = true;

$conn = array(
    'driver' => 'pdo_mysql',
    'user'=>'root',
    'password'=>'',
    'dbname'=>'treina_w_doctrine'
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entities"), $isDevMode);
$entityManager = EntityManager::create($conn, $config);