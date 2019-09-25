<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

class TestCategoryGoodsGet extends TestCase
{

    public function loadConfig()
    {
        $config = require_once 'config.php';
        return $config;
    }

    public function testCategory()
    {
        $config = $this->loadConfig();
        $client = new \JdCps\Client();
        $client->setAppKey($config['appKey']);
        $client->setAppSecret($config['appSecret']);
        $request = new \JdCps\Request\CategoryGoodsGet();
        $request->setParentId(1342);
        $request->setGrade(2);
        $res = $client->execute($request);
        $this->assertEquals('success', $res['message']);
    }
}
