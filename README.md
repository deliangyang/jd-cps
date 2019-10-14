# jd-cps

### 说明

该sdk暂时只实现了针对个人开放的API。

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \JdCps\Client();
$client->setAppKey('xxxxx');
$client->setAppSecret('xxxxxx');
$request = new \JdCps\Request\JingFenQueryRequest();
$request->setEliteId(11);
$res = $client->execute($request);
var_dump($res);
```


### How to install it?

```
composer require ydl/jd-cps
```
