<?php


namespace JdCps;


use JdCps\Request\BaseRequest;

class Client
{
    protected $app_key = '';

    protected $app_secret = '';

    public function __construct()
    {
    }

    public function setAppKey(string $appKey)
    {
        $this->app_key = $appKey;
    }

    public function setAppSecret(string $appSecret)
    {
        $this->app_secret = $appSecret;
    }

    public function execute(BaseRequest $request)
    {
        return $request->request($this->app_key, $this->app_secret);
    }
}
