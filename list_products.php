<?php
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('HTL3R\\DoctrineORMDemo\\Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}