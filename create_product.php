<?php
/**
 * Created by PhpStorm.
 * User: Kamil Koziol
 * Date: 25.02.2019
 * Time: 12:00
 */
// create_product.php <name>
use HTL3R\DoctrineORMDemo\Product;
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
