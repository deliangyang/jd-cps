<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class TestJingFenQuery extends TestCase
{

    public function loadConfig()
    {
        $config = require_once 'config.php';
        return $config;
    }

    public function testJingFenQueryResult()
    {
        $config = $this->loadConfig();
        $client = new \JdCps\Client();
        $client->setAppKey($config['appKey']);
        $client->setAppSecret($config['appSecret']);
        $request = new \JdCps\Request\JingFenQueryRequest();
        $request->setEliteId(1);
        $res = $client->execute($request);
        $this->assertEquals('success', $res['message']);
    }
}
