<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

class TestGoodsPromotionGoodsInfo extends TestCase
{

    public function loadConfig()
    {
        $config = require_once 'config.php';
        return $config;
    }

    public function testGoodsPromotionGoodsInfoQuery()
    {
        $config = $this->loadConfig();
        $client = new \JdCps\Client();
        $client->setAppKey($config['appKey']);
        $client->setAppSecret($config['appSecret']);
        $request = new \JdCps\Request\GoodsPromotionGoodsInfoQuery();
        $request->setSkuIds([
            5225346,
        ]);
        $res = $client->execute($request);
        $this->assertEquals('接口成功', $res['message']);
    }
}
