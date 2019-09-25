<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \JdCps\Client();
$request = new \JdCps\Request\JingFenQueryRequest();
$request->setEliteId(11);
$res = $client->execute($request);
var_dump($res);
