<?php

include 'bootstrap.php';

use Entities\Products;

$products = $entityManager->getRepository('Entities\Products');

$products = $products->findAll();

foreach ($products as $v)
	echo $v->getId().' - '.$v->getName().'<br>';