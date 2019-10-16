<?php

require_once('Singleton.php');

$s = Singleton::getInstance();
echo($s->getHash().PHP_EOL);

$s = false;

$s = Singleton::getInstance();
echo($s->getHash().PHP_EOL);


echo(md5(mt_rand()));