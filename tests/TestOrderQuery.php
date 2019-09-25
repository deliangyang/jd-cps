<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

class TestOrderQuery extends TestCase
{

    public function loadConfig()
    {
        $config = require_once 'config.php';
        return $config;
    }

    public function testOrder()
    {
        $config = $this->loadConfig();
        $client = new \JdCps\Client();
        $client->setAppKey($config['appKey']);
        $client->setAppSecret($config['appSecret']);
        $request = new \JdCps\Request\OrderQueryRequest();
        $request->setTime(new \DateTime('2019-07-06 00:00:00'));
        $res = $client->execute($request);
        $this->assertEquals('success', $res['message']);
    }
}
