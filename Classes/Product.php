<?php
namespace HTL3R\DoctrineORMDemo;

/**
 * Created by PhpStorm.
 * User: Kamil Koziol
 * Date: 25.02.2019
 * Time: 12:15
 */

// src/Product.php

/**
 * @Entity @Table(name="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}