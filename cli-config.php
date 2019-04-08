<?php
/**
 * Created by PhpStorm.
 * User: Kamil Koziol
 * Date: 25.02.2019
 * Time: 12:05
 */

// cli-config.php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);