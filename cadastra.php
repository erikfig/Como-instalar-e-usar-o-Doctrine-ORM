<?php

include 'bootstrap.php';

use Entities\Products;

$products = new Products();

$products->setCreated(new DateTime("now"))
	->setDescription('asdhaisu asudhasuida suidashd uias')
	->setModified(new DateTime("now"))
	->setName("produto 3")
	->setQtd(100)
	->setRef("abc")
	->setShortDescription('asdhaisu asudhasuida')
	->setValue(149.99);

$entityManager->persist($products);
$entityManager->flush();