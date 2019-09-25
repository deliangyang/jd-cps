<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

class TestPromotionCommonGet extends TestCase
{

    public function loadConfig()
    {
        $config = require_once 'config.php';
        return $config;
    }

    public function testPromotionGet()
    {
        $config = $this->loadConfig();
        $client = new \JdCps\Client();
        $client->setAppKey($config['appKey']);
        $client->setAppSecret($config['appSecret']);
        $request = new \JdCps\Request\PromotionCommonGet();
        $request->setMaterialId('https://item.jd.com/43285780019.html');
        $request->setSiteId('1533806507');
        $request->setCouponUrl('http://coupon.jd.com/ilink/couponSendFront/send_index.action?key=45ba83ae3379446da2b93d9886e3b8d8&roleId=23370125&to=item.jd.com/43285780019.html');
        $res = $client->execute($request);
        $this->assertEquals('success', $res['message']);
    }
}
